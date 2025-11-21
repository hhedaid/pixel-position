<x-layout>
    <div class="space-y-10">
        <section class="flex flex-col items-center">
            <h2 class="capitalize my-8 text-4xl font-bold">Let's find you a great job</h2>
            <div class="border lg:w-150 rounded-xl px-2 py-2 flex gap-1 items-center bg-white/10 border-white/15">
                <form action="" class="flex-1">
                    <input type="text" class="w-full h-8 focus:border-0 focus:outline-none" placeholder="I'am looking for...">
                </form>
                <div class="w-4 h-4 bg-white"></div>
            </div>
        </section>

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Find Jobs</x-section-heading>
            <div class="space-y-5">
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>
        </section>
    </div>
</x-layout>
