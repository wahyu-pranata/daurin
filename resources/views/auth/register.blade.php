<x-guest-layout>
  <form method="POST" action="{{ route('register') }}" x-data="{
      provinces: {{ Js::from($provinces) }},
      cities: [],
      districts: [],
      villages: [],
      selectedProvince: null,
      selectedProvinceId: null,
      selectedCity: null,
      selectedCityId: null,
      selectedDistrict: null,
      selectedDistrictId: null,
      selectedVillage: null,
      selectedVillageId: null,
      handleProvinceChange() {
          if (this.selectedProvinceId) {
              fetch(`/location/cities/${this.selectedProvinceId}`)
                  .then(response => { return response.json() })
                  .then(data => { this.cities = data; });
              this.selectedProvince = this.provinces.find((province) => province.id == this.selectedProvinceId);
              console.log(this.selectedProvince);
  
          } else {
              this.cities = []
          }
      },
      handleCityChange() {
          if (this.selectedCityId) {
              fetch(`/location/districts/${this.selectedCityId}`)
                  .then(response => { return response.json() })
                  .then(data => { this.districts = data; });
              this.selectedCity = this.cities.find((city) => city.id == this.selectedCityId);
              console.log(this.selectedCity);
          } else {
              this.districts = []
          }
      },
      handleDistrictChange() {
          if (this.selectedDistrictId) {
              fetch(`/location/villages/${this.selectedDistrictId}`)
                  .then(response => { return response.json() })
                  .then(data => { this.villages = data; });
              this.selectedDistrict = this.districts.find((district) => district.id == this.selectedDistrictId);
              console.log(this.selectedDistrict);
          } else {
              this.villages = []
          }
      },
      handleVillageChange() {
          this.selectedVillage = this.villages.find((village) => village.id == this.selectedVillageId);
      }
  }">
    @csrf
    <input type="hidden" name="selectedProvince" x-model="selectedProvince.name">
    <input type="hidden" name="selectedCity" x-model="selectedCity.name">
    <input type="hidden" name="selectedDistrict" x-model="selectedDistrict.name">
    <input type="hidden" name="selectedVillage" x-model="selectedVillage.name">
    <!-- Name -->
    <div>
      <x-input-label for="name" :value="__('Name')" />
      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
        autofocus autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
      <x-input-label for="email" :value="__('Email')" />
      <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autocomplete="username" />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-input-label for="password" :value="__('Password')" />

      <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
      <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

      <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
        required autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="mt-4">
      <x-input-label for="address" :value="__('Alamat Lengkap')" />
      <textarea required class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        id="address" name="address"></textarea>
    </div>


    <div class="mt-4">
      <x-input-label for="province" :value="__('Provinsi')" />
      <select required class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        id="province" name="province" x-model="selectedProvinceId" @change="handleProvinceChange">
        <option value="" selected disabled>---Select---</option>
        <template x-for="province in provinces" :key="province.id">
          <option :value="province.id" x-text="province.name"></option>
        </template>
      </select>
    </div>
    <div class="mt-4" x-show="selectedProvinceId">
      <x-input-label for="city" :value="__('Kabupaten/Kota')" />
      <select required class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        id="city" name="city" x-model="selectedCityId" @change="handleCityChange">
        <option value="" selected disabled>---Select---</option>
        <template x-for="city in cities" :key="city.id">
          <option :value="city.id" x-text="city.name"></option>
        </template>
      </select>
    </div>
    <div class="mt-4" x-show="selectedCityId">
      <x-input-label for="district" :value="__('Kecamatan')" />
      <select required class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        id="district" name="district" x-model="selectedDistrictId" @change="handleDistrictChange">
        <option value="" selected disabled>---Select---</option>
        <template x-for="district in districts" :key="district.id">
          <option :value="district.id" x-text="district.name"></option>
        </template>
      </select>
    </div>
    <div class="mt-4" x-show="selectedDistrictId">
      <x-input-label for="village" :value="__('Kelurahan/Desa')" />
      <select required class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        id="village" name="village" x-model="selectedVillageId" @change="handleVillageChange">
        <option value="" selected disabled>---Select---</option>
        <template x-for="village in villages" :key="village.id">
          <option :value="village.id" x-text="village.name"></option>
        </template>
      </select>
    </div>


    <div class="flex items-center justify-end mt-4">
      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('login') }}">
        {{ __('Already registered?') }}
      </a>

      <x-primary-button class="ms-4">
        {{ __('Register') }}
      </x-primary-button>
    </div>
  </form>
</x-guest-layout>
