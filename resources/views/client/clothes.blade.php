@extends('client.layouts.main')
@section('content')
<br>
<br>
<br>

<h1 style="  font-family: courier; font-size: 70px; font-weight: 600; background-image: linear-gradient(to left, #553c9a, #b393d3);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text; margin-left: 600px;">Clothes</h1>
   <div class="row">
      @foreach ($clothes as $clothe)
      <div class="col-lg-4 col-sm-4">
         <div class="box_main">
            <h4 class="shirt_text">{{ $clothe->name }}</h4>
            <p class="price_text"><span style="color: #262626;"> Price:</span> dt {{ $clothe->price }} </p>
            <div class="tshirt_img"> <img src="{{ asset('storage/' . $clothe->photo) }}" alt="{{ $clothe->name }}"></div>
            <div class="btn_main">
               <button class="buy_now_button" data-clothe-id="{{ $clothe->id }}" data-toggle="modal" data-target="#modal{{ $clothe->id }}">Buy Now</button>
               <div class="seemore_bt"><a href="#">See More</a></div>
            </div>

         </div>
      </div>
      <div id="modal{{ $clothe->id }}" class="modal">
         <div class="modal-content">
            <span class="close">&times;</span>
            <div class="size-color-input mb-3">
               <div class="row">
                  <div class="col">
                     <label class="form-label">Size</label>
                     <select name="size_id" class="form-control">
                        <option value="">Select size</option>
                        @foreach ($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                        @endforeach
                     </select>
                  </div>
                  <div class="col">
                     <label class="form-label">Color</label>
                     <select name="color_id" class="form-control">
                        <option value="">Select color</option>
                        @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
            </div>
            <div class="buy_bt"><a href="{{ url('add-to-cart/'.$clothe->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
            </div>

         </div>
      </div>
      @endforeach
   </div>
   <script>
   document.addEventListener('DOMContentLoaded', function() {
      const modal = document.getElementById('modal');
      const closeButton = document.querySelector('.close');
      const buyButtons = document.querySelectorAll('.buy_now_button');
      const addToCartButtons = document.querySelectorAll('.add_to_cart_button');
      const sizeSelect = document.querySelector('select[name="size_id"]');
      const colorSelect = document.querySelector('select[name="color_id"]');

      // Fonction pour afficher le modèle
      function showModal() {
         modal.style.display = 'block';
      }

      // Fonction pour masquer le modèle
      function hideModal() {
         modal.style.display = 'none';
      }

      // Gérer le clic sur le bouton "Buy Now"
      buyButtons.forEach(button => {
         button.addEventListener('click', function(e) {
            e.preventDefault();
            const clotheId = button.getAttribute('data-clothe-id');
            // Ici, vous pouvez effectuer des actions supplémentaires en fonction de l'ID de l'article
            showModal();
         });
      });

      // Gérer le clic sur le bouton de fermeture du modèle
      closeButton.addEventListener('click', hideModal);


      // Gérer le clic sur le bouton "Add to Cart"
      

   });
</script>

@endsection