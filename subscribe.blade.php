<x-app-layout pagetitle="{{ __('Dashboard') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Subscribe
        </h2>
    </x-slot>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-6">
            <form action="{{ route('subscribe.post') }}" method="post" id="payment-form" data-secret="{{ $intent->client_secret }}">
              @csrf
              <div class="w-1/2 form-row">
                <label for="cardHolder-name">Cardholder's Name</label>
                <div>
                  <input type="text" id="cardholder-name" name="cardholder-name" value="">
                </div>
                <input type="radio" name="plan" value="price_1JTeFwIHhpGgHJWAA90Fhote" id="monthly">
                <label for="monthly">Hosting and maintenance 11.99 / mo</label>

                <input type="radio" name="plan" value="price_1JTeIMIHhpGgHJWAI7fUFnNV" id="yearly">
                <label for="yearly">Hosting and maintenance 131.88 / yr</label>

                <label for="card-element">Credit or Debit Card</label>
                <div id="card-element">
                  <!-- A stripe Element will be inserted here -->
                </div>
                <!-- used to display form errors. -->
                <div id="card-errors" role="alert"></div>
              </div>
              <button type="submit" class="mb-6 mt-8 md:mb-0 bg-blue-600 text-white font-bold rounded-full mx-auto py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" >
                <!-- This svg was grabbed from the source code view-source:https://tailwindcss.com/docs/animation -->
                <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                   <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#68c2ff" stroke-width="4"></circle>
                   <path class="opacity-75" fill="#68c2ff" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span>
                  Submit
                </span>
              </button>
              {{-- <x-jet-button class="ml-4">
                 Subscribe Now
              </x-jet-button> --}}
            </form>
          </div>
        </div>
      </div>

    </div>
    @push('stripe')
      <script src="https://js.stripe.com/v3/"></script>
      <script>
            // Create a Stripe client.
            var stripe = Stripe('pk_test_51JTZr2IHhpGgHJWA84qlbmjwLu3muHlrdoEpXe43qjnM2Q1nngC9bv4DlCXXYfXt9qZp469z3g167ECc8SDdd6PG00ohE8qWiw');
            // Create an instance of Elements.
            var elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
            };
            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});
            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });
            // Handle form submission.
            var form = document.getElementById('payment-form');
            var cardHolderName = document.getElementById('cardholder-name');
            var clientSecret = form.dataset.secret;
            form.addEventListener('submit', async function(event) {
                event.preventDefault();
                const { setupIntent, error } = await stripe.confirmCardSetup(
                  clientSecret, {
                    payment_method:{
                      card,
                      billing_details: { name: cardHolderName.value }
                    }
                  }
                );
                if (error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    // Send the token to your server.
                    // console.log(setupIntent);
                    stripeTokenHandler(setupIntent);
                }
                // stripe.createToken(card).then(function(result) {
                //     if (result.error) {
                //     // Inform the user if there was an error.
                //     var errorElement = document.getElementById('card-errors');
                //     errorElement.textContent = result.error.message;
                //     } else {
                //     // Send the token to your server.
                //     stripeTokenHandler(result.token);
                //     }
                // });
            });
            // Submit the form with the token ID.
            function stripeTokenHandler(setupIntent) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'paymentMethod');
                hiddenInput.setAttribute('value', setupIntent.payment_method);
                form.appendChild(hiddenInput);
                // Submit the form
                form.submit();
            }
        </script>
    @endpush
</x-app-layout>
