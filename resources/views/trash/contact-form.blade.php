<div class="relative bg-white mt-8">
	<div class="absolute inset-0">
		<div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50">
		</div>
	</div>
	<div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
		<div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
			<div class="max-w-lg mx-auto">
				<h2 class="text-2xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
					Get in touch
				</h2>
				<p class="mt-2 text-lg leading-6 text-gray-500">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
				<dl class="mt-8 text-base leading-6 text-gray-500">
					<div>
						<dt>Postal address</dt>
						<dd>
							<p>742 Evergreen Terrace</p>
							<p>springfield, OR 12345</p>
						</dd>
					</div>
					<div class="mt-6">
						<dt class="sr-only">Phone number</dt>
						<dd>

						</dd>
					</div>
				</dl>
			</div>
		</div>
	</div>
  <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
  	<div class="max-w-lg mx-auto lg:max-w-none">
			<form class="grid grid-cols-1 row-gap-6" action="/contact" method="POST">
				@csrf
				@if (session('success_message'))
					<div class="rounded-md bg-green-50 p-4 mt-8">

					</div>
				@endif
				<div>
					<label for="name" class="sr-only">Full name</label>
					<div class="relative rounded-md shadow-sm">
						<input id="name" type="text" name="name" value="{{ old('name') }}" class="@error('name') border  border-red-500 @enderror form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Full Name">
					</div>
					@error('name')
						<p class="text-red-500 mt-1">{{ $message }}</p>
					@enderror
				</div>
					<div>
						<label for="message" class="sr-only">Message</label>
						<div class="relative rounded-md shadow-sm">
							<textarea id="message" rows="4" type="text" name="message" value="{{ old('name') }}" class="@error('message')border border-red-500 @enderror form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Message">{{ old('message') }}</textarea>


						</div>
				</div>
				<div class="">
					<span class="inline-flex rounded-md shadow-sm">
						<button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
							Submit
						</button>
					</span>
				</div>
			</form>

  	</div>
  </div>
</div>
