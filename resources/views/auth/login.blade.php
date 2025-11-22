<x-layout>
    <div class="flex justify-center items-center h-full">
        <x-form.card method="POST" action="/login">
            @csrf
            <div>
                <label class="inline-block w-30" for="email">Email</label>
                <input id="email" type="text" name="email"
                       class="border border-white/10 rounded outline-none px-2"
                       value="{{old('email')}}"
                >
                @error('email')
                    <div class="text-sm text-red-400">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label class="inline-block w-30" for="password">Password</label>
                <input id="password" type="password" name="password"
                       class="border border-white/10 rounded outline-none px-2"
                       value="{{old('password')}}"
                >
                @error('password')
                    <div class="text-sm text-red-400">{{$message}}</div>
                @enderror
            </div>
            <div class="text-right">
                <x-button>Login</x-button>
            </div>
            <div class="text-sm italic">
                Don't have an account <a class="underline" href="{{url('register')}}">Register</a>
            </div>
        </x-form.card>
    </div>
</x-layout>
