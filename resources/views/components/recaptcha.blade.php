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
									var g_recaptcha_response = grecaptcha.getResponse();
									//alert(g_recaptcha_response);
									//Recaptcha verification is complete and we are ready to submit the form
									//????? BUT how to call the method "submitForm" on livewire ??????
									this.$el.closest('form').submit();
                }
            };
        };
    </script>
@endpush
