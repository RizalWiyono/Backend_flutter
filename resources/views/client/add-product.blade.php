  <x-client-layout>
    <x-slot name="header">
      <div class="flex justify-between">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ 'Add Product' }}
          </h2>
          <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">Add Product</button>
      </div>
  </x-slot>


        <div class="py-12">
            <x-succes-status class="mb-4" :status="session('message')" />
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="py-12 px-12 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                  <form action="{{url('client/add-product')}}" method="POST">
                    @csrf
                    <div>
                        <x-label for="name" :value="__('Nama Product')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                    <div>
                        <x-label for="category" :value="__('Category Product')" />
                        <x-input id="category" class="block mt-1 w-full" type="text" name="category" :value="old('category')" required autofocus />
                    </div>
                    <div>
                        <x-label for="price" :value="__('Price Product')" />
                        <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus />
                    </div>
                    <div>
                        <x-label for="description" :value="__('Description Product')" />
                        <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
                    </div>
                    <div>
                        <x-label for="qty" :value="__('Quantity Product')" />
                        <x-input id="qty" class="block mt-1 w-full" type="text" name="qty" :value="old('qty')" required autofocus />
                    </div>
                    <div>
                        <x-label for="image" :value="__('image Product')" />
                        <x-input id="image" class="block mt-1 w-full" type="text" name="image" :value="old('image')" required autofocus />
                    </div>
                    <x-button class="ml-3">
                        {{ __('Add Product') }}
                    </x-button>
                
          </div>
      </div>
  </x-client-layout>
