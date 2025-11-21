<x-layout>
    <div class="space-y-10">
        <section>
            <h2 class="uppercase">Let's find you a a job</h2>
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
