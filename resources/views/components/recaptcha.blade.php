<div
    x-data="recaptcha()"
    x-init="init"
		@recaptcha.window="execute"
></div>
@push('challenge')
    <script>
        window.recaptcha = () => {
            return {
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
                  // grecaptcha.render(this.$el, {
                  //     sitekey: '{{ config('services.recaptcha.key') }}',
                  //     size: 'invisible',
                  //     callback: this.onComplete.bind(this)
                  // });

                }
            };
        };
    </script>
@endpush
