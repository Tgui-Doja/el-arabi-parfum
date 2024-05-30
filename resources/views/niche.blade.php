<style>/* CSS for Card Elements */
    /* CSS for Card Elements */
 .card {
     border: 1px solid #ccc;
     border-radius: 8px;
     box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
     transition: box-shadow 0.3s ease-in-out;
     height: 350px; /* Set a fixed height for all cards */
 }
 
 .card:hover {
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
 }
 
 /* CSS for Card Elements */
 .card img {
     width: 100%;
     height: 200px; /* Set a fixed height for all images */
     object-fit: cover; /* Ensure images maintain aspect ratio and cover the entire space */
     border-top-left-radius: 8px;
     border-top-right-radius: 8px;
 
     /* Apply brightness filter */
     filter: brightness(110%); /* Adjust the percentage to make the image brighter or clearer */
 }
 
     
     .card-body {
         padding: 15px;
     }
     
     .card-title {
         font-size: 18px;
         font-weight: bold;
         margin-bottom: 10px;
     }
     
     .card-text {
         font-size: 16px;
         color: #555;
         margin-bottom: 10px;
     }
     
     .btn-holder {
         text-align: center;
     }
     
     .btn-holder .btn {
         padding: 8px 20px;
         font-size: 16px;
         border-radius: 20px;
     }
     
     </style>
 @extends('layouts.base')
 @section('content')
     <div class="row">
 @foreach ($niches as $niche)
 <div class="col-md-3 col-6 mb-4">
     <div class="card">
         <img src="{{asset('images')}}/{{$niche->image}}" classe="card-img-top">
         <div class="card-body">
             <h4 class="card-title">{{$niche->name}}</h4>
             <p>{{$niche->author}}</p>
             <p class="card-text"><strong>price:</strong>{{$niche->price}}DH</p>
             <p class="btn-holder"><a href="{{route('addniche.to.cart',$niche->id)}}" class="btn btn-outline-dark">add to cart</a></p>
         </div>
     </div>
 </div>
     
 @endforeach    
 </div>
 @endsection