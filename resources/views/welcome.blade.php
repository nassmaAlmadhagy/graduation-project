<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>تقييم الجامعات </title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
<!-----------------------------------------------------------
-- animate.min.css by Daniel Eden (https://animate.style)
-- is required for the animation of notifications and slide out panels
-- you can ignore this step if you already have this file in your project
--------------------------------------------------------------------------->

<link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="{{ asset('css/bladewind.css') }}" rel="stylesheet">
  
<link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

    </head>

    <body class="">
   

       
      

<div class="container">
  <div class="img-logo">
    <h1><img src="/images/myLogo.png" alt="Description of the image">
    <h1>قيم الجامعة </h1>
  </div>
  </h1>
  @isset($titlesAndIds)
 <div id='ratings-container'>
  @foreach ($titlesAndIds as $index => $titleAndValues)
  <div class="rating-section">
    <div class="">{{ $titleAndValues['title'] }}</div>

    @foreach ($titleAndValues['values'] as $value)
    <div class="rating-item" :id="'rating-item-{{ $index }}-{{ $value['id'] }}'">
      <div class="rating-title">{{ $value['title'] }}</div> 
      <div>
        <x-bladewind::rating
        rating='0'
        stars='5'
        color="yellow"
        name="small-rating-{{ $value['id'] }}"
        onclick="saveRating('small-rating-{{ $value['id'] }}')"
          /></div>
    </div>
  @endforeach
  </div>
  @endforeach
</div>
<x-bladewind::button>حفظ التقييم </x-bladewind::button>  @endisset
      </div>
      <script>
        // Function to toggle the rating state and save the new value
        function saveRating(elementName) {
            // Find the hidden input associated with the rating component
            let ratingInput = document.querySelector(`.rating-value-${elementName}`);
            // Toggle the rating value between 0 (not rated) and 1 (rated)
            let currentValue = ratingInput.value;
            let newValue = currentValue === '0' ? '1' : '0';
        
            // Update the hidden input value
            ratingInput.value = newValue;
        
            // Now that you have the new rating value, you can save it
            // This is where you would typically make an AJAX call to your Laravel backend
            console.log(`Saving rating: ${newValue}`);
        
            // Example AJAX call using fetch API
            // Replace '/article/rating/save' with your actual endpoint
            // and adjust the request body as needed
            fetch('/article/rating/save', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    // Include any necessary CSRF token for Laravel
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ rating: newValue })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }
        </script>
    
  

    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    </body>

    </html>
