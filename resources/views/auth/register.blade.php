<x-layout>
    <div class="flex justify-center items-center h-full">
        <x-form.card method="POST" action="/register">
            @csrf
            <div>
                <label class="inline-block w-30" for="name">Name</label>
                <input
                    id="name" type="text" name="name"
                    class="border border-white/10 rounded outline-none px-2"
                    value="{{old('name')}}"
                >
                @error('name')
                    <div class="text-sm text-red-400">{{$message}}</div>
                @enderror
            </div>
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
                <x-button>Register</x-button>
            </div>
            <div class="text-sm italic">
                Already having an account <a class="underline" href="{{url('login')}}">Log In</a>
            </div>
        </x-form.card>
    </div>
</x-layout>
