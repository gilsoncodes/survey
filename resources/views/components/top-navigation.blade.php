<div x-show.transition.opacity.duration.200ms="top"
			x-on:scroll.window="if(window.scrollY > 20){top=false;}else{top=true;}"
			class="max-w-7xl mx-auto px-4 md:px-2 lg:px-8 h-10 my-auto">
	<div class="" x-data="urls()" >
		<div class="relative flex justify-end h-8 mt-2">
			<div @click="links" class="relative flex items-center justify-center border border-blue-400 hover:border-transparent text-blue-500  hover:text-white bg-transparent hover:bg-blue-500 rounded-xl cursor-pointer pl-9 pr-2">
				<div class="text-sm">
					{{ __('English') }}
				</div>
				<div class="pl-2">
					<svg class="w-3 h-3"
								fill="none"
								stroke="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="2"
											d="M19 9l-7 7-7-7">
						</path>
					</svg>
				</div>
				<div class="absolute top-1 left-1">
				@if (preg_match( "#" . config('app.domain') . "/en#", url()->full()))
						<x-us-flag width="24" height="24" />
				@else
						<x-br-flag width="24" height="24" />
				@endif
				</div>
			</div>
			<div x-cloak @click.away="language = false"
					x-show="language"
					class="absolute top-0 right-0 mt-8 p-2  z-30 bg-white border border-blue-400">
				<div class="text-center">
					Select a language
				</div>
				<div class="" x-text="test">

				</div>
				<hr class="my-3">
				<div >
					<!-- svg en starts-->
						<div x-show="lang == '/en'" class="flex bg-blue-200 cursor-pointer mb-3" @click="language = false">
								<x-us-flag width="32" height="24" />
								<div class="pl-2">
									English
								</div>
						</div>
						<div x-show="lang != '/en'">
							<a :href=" 'http://' + hostname + '/en' + path">
							<div class="flex hover:bg-gray-200 mb-3">
								<x-us-flag width="32" height="24" />
								<div class="pl-2">
									English
								</div>
							</div>
							</a>
						</div>
					<!-- svg en ends-->
					<!-- svg br starts-->
						<div x-cloak x-show="lang == '/pt-br'" class="flex bg-blue-200 cursor-pointer" @click="language = false">
							<x-br-flag width="32" height="24" />
							<div class="pl-2">
								Português
							</div>
						</div>
						<div x-cloak x-show="lang != '/pt-br'">
							<a :href=" 'http://' + hostname + '/pt-br' + path">
								<div class="flex hover:bg-gray-200">
									<x-br-flag width="32" height="24" />
									<div class="pl-2">
										Português
									</div>
								</div>
							</a>
						</div>
					<!-- svg br ends-->
				</div>
			</div>
		</div>
	</div>
</div>
<script>
		function urls() {
				return {
					language: false,
					hostname: window.location.hostname,
					full: window.location.href,
					lang: '',
					path: '',
					test: '',
					links(){
						let url_arr = this.full.split(this.hostname);
						let full_path = url_arr[url_arr.length - 1];
						let en_path = full_path.substring(3);
						let pt_path = full_path.substring(6);
						this.test = full_path;
						switch(full_path.substring(0, 3)) {
						  case '/en':
								this.lang = '/en';
								 this.path = en_path;
								break;
						  case '/pt':
								this.lang = '/pt-br';
								 this.path = pt_path;
						    break;
						  default:
								this.lang = '/en';
								 this.path = full_path;
						}
						this.language = !this.language;
					},
				}
		}
</script>
