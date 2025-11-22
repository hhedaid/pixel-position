<x-layout class="space-y-5">
    <section class="border-b pb-5 border-white/20">
        <h2 class="font-bold text-lg mb-5">Create a new company</h2>
        <x-form.card class="w-150" method="POST" action="/employer" enctype="multipart/form-data">
            @csrf
            <div>
                <label class="inline-block w-30" for="name">Name</label>
                <x-form.input id="name" type="text" name="name" value="{{old('name')}}"/>
                @error('name')
                <div class="text-sm text-red-400">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label class="inline-block w-30" for="logo">Logo</label>
                <x-form.input type="file" name="logo" id="logo"/>
                @error('logo')
                <div class="text-sm text-red-400">{{$message}}</div>
                @enderror
            </div>
            <div class="text-right">
                <x-button>Create</x-button>
            </div>
        </x-form.card>
    </section>
    <section>
        <form class="text-right" action="/logout" method="POST">
            @csrf
            <x-button class="bg-red-500 hover:bg-red-600">Logout</x-button>
        </form>
    </section>
</x-layout>
