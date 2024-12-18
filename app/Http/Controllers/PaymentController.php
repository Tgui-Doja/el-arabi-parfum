<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {
        try {
            $response = $this->gateway->purchase([
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ])->send();

            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerId')) {
            try {
                $transaction = $this->gateway->completePurchase([
                    'payer_id' => $request->input('PayerId'),
                    'transactionReference' => $request->input('paymentId')
                ])->send();

                if ($transaction->isSuccessful()) {
                    $arr = $transaction->getData();

                    $payment = new Payment();
                    $payment->payment_id = $arr['id'];
                    $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr['payer']['payer_info']['email'];
                    $payment->amount = $arr['transactions'][0]['amount']['total'];
                    $payment->currency = env('PAYPAL_CURRENCY');
                    $payment->payment_status = $arr['state'];
                    $payment->save();

                    return "Payment is successful. Your transaction ID is: " . $arr['id'];
                } else {
                    return 'Transaction failed: ' . $transaction->getMessage();
                }
            } catch (\Throwable $th) {
                return 'Exception: ' . $th->getMessage();
            }
        } else {
            return 'Payment was not successful.';
        }
    }

    public function error()
    {
        return 'User declined the payment.';
    }
}
