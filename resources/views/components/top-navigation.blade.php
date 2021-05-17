<div x-cloak x-show.transition.opacity.duration.200ms="top"
			x-on:scroll.window="if(window.scrollY > 20){top=false;}else{top=true;}"
			class="max-w-7xl mx-auto px-4 md:px-2 lg:px-8 h-10 my-auto">
	<div class="" x-data="urls()" x-init="init"  >
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
				<div x-show="lang == '/en'" x-cloak class="absolute top-1 left-1">
						<x-us-flag width="24" height="24" />
				</div>
				<div x-show="lang == ''" x-cloak class="absolute top-1 left-1">
						<x-us-flag width="24" height="24" />
				</div>
				<div x-show="lang == '/pt-br'" x-cloak class="absolute top-1 left-1">
						<x-br-flag width="24" height="24" />
				</div>
			</div>
			<div @click.away="language = false"
					x-show="language"
					x-cloak
					class="absolute top-0 right-0 mt-8 p-2  z-30 bg-white border border-blue-400">
				<div class="text-center">
					<span>Select a language</span><br><span>Selecione uma língua</span>
				</div>
				<hr class="my-3">
				<div >
					<!-- svg en starts-->
						<div x-show="lang == '/en'" x-cloak class="flex bg-blue-200 cursor-pointer py-2 mb-2" @click="language = false">
								<x-us-flag width="32" height="24" />
								<div class="pl-2">
									English
								</div>
						</div>
						<div x-show="lang != '/en'" x-cloak>
							<a :href=" 'http://' + hostname + '/en' + path">
							<div class="flex hover:bg-gray-200  py-2 mb-2">
								<x-us-flag width="32" height="24" />
								<div class="pl-2">
									English
								</div>
							</div>
							</a>
						</div>
					<!-- svg en ends-->
					<!-- svg br starts-->
						<div  x-show="lang == '/pt-br'" x-cloak class="flex bg-blue-200 cursor-pointer py-2" @click="language = false">
							<x-br-flag width="32" height="24" />
							<div class="pl-2">
								Português
							</div>
						</div>
						<div x-show="lang != '/pt-br'" x-cloak>
							<a :href=" 'http://' + hostname + '/pt-br' + path">
								<div class="flex hover:bg-gray-200 py-2">
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
					language: '',
					hostname: '',
					lang: '',
					path: '',
					init(){
						this.getlang();
						this.language = false;
					},
					links(){
						this.getlang();
						this.language = !this.language;
					},
					getlang(){
						this.hostname = window.location.hostname;
						let full = window.location.href;
						let url_arr = full.split(this.hostname);
						let full_path = url_arr[url_arr.length - 1];
						let en_path = full_path.substring(3);
						let pt_path = full_path.substring(6);
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
					},
				}
		}
</script>
