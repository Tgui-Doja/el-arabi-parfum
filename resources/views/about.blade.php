@extends('layouts.base')

@section('content')
    <div class="content-wrapper">
        <div class="content-container">
            <img src="{{asset('images/431195706_914452024021660_4982702270400364108_n.jpg')}}" width="570" alt="News" >
            <div class="text-container">
                <div class="header-text">EL ARABI PARFUMS</div>
                <div>
                    <p>
                        Welcome to <span class="highlight">EL ARABI PARFUMS</span>.<span class="highlight">Parfum El Arabi</span> is a virtual sanctuary for fragrance aficionados, offering a mesmerizing array of scents that tantalize the senses and transport you to distant lands with just a whiff.

                        Delve into a world where each bottle holds a narrative, meticulously crafted to evoke emotions and memories. From the delicate floral notes of jasmine to the rich, woody undertones of oud, every essence is a symphony of complexity waiting to be explored.
                        With a commitment to quality and authenticity, <span class="highlight">EL ARABI PARFUMS</span> curates a curated selection of perfumes from renowned artisans, ensuring that each product is a true olfactory masterpiece. 
                       
                        Whether you seek a signature scent to express your individuality or a 
                        gift to enchant a loved one, <span class="highlight">EL ARABI PARFUMS</span> promises an unforgettable olfactory journey that transcends time and space.</br>

                                          Thank you for choosing <span class="highlight">EL ARABI PARFUMS</span> .</br>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .content-wrapper {
        margin: 5rem;
    }
    .content-container {
        height: 100vh;
        width: 100%;
        display: flex;
        padding: 34px;
        text-align: center;
        font-family: 'Gotham Rounded Book';
        font-size: 22px;
        justify-content: center;
        align-items: center;
    }
    .text-container {
        float: left;
        margin-left: 20px;
        margin-top: 80px;
        text-align: left;
        max-inline-size: 620px;
        height: auto; /* You can set a specific height here */
    }
    .header-text {
        font-family: 'Gotham Rounded';
        font-size: 41px;
        color: #D3A121;
    }
    .highlight {
        font-family: 'Melodrama', serif;
        font-style: italic;
        padding: 0px 5px;
        line-height: 70%;
        color: #D3A121;
    }
</style>
