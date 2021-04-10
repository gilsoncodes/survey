<div >
  <div
      x-data="recaptcha()"
      x-init="prep" {-- when renderNow change to true invoke function init--}
  		@recaptcha.window="execute" {-- listening for a recaptha event, not in this element here, hear on the window--}
      @backtest.window="test"
  ></div>
</div>

{{-- @entangle($attributes->wire('model')) --}}
@push('challenge')
    <script>
        window.recaptcha = () => {
            return {

                prep(){

                  this.$watch('vartest == 1', () => {
                    alert('back');
                  });
                  this.init();
                },
                init() {
                    //render the widget manually
										grecaptcha.ready(() => {
                        grecaptcha.render(this.$el, {
                            sitekey: '{{ config('services.recaptcha.key') }}',
                            size: 'invisible',
                            callback: this.onComplete.bind(this)
                        });
                    });
                },
                execute() {
										grecaptcha.execute();
                },
                onComplete() {
									let grecaptcharesponse = grecaptcha.getResponse();

                  Livewire.emit('validateRecaptcha', grecaptcharesponse)
                  this.init();
                },
                test() {
                  //grecaptcha.reset();
                  //alert('funcionou');
                  //this.init();
                  //grecaptcha.reset();
                  //grecaptcha.reset();

                },

            };
        };
    </script>
@endpush
