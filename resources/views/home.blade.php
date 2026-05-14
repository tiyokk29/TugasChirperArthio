<x-layout>
    <x-slot:title>
        Home Feed
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Latest Chirps</h1>

    <!-- Chirp Form -->
<div class="card bg-base-100 shadow mt-8">
    <div class="card-body">
        <form method="POST" action="/chirps">
            @csrf
            <div class="form-control w-full">
                <textarea
                    name="message"
                    placeholder="What's on your mind?"
                    class="textarea textarea-bordered w-full resize-none @error('message') textarea-error @enderror"
                    rows="4"
                    maxlength="255"
                    required
                >{{ old('message') }}</textarea>

                @error('message')
                    <div class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <div class="mt-4 flex items-center justify-end">
                <button type="submit" class="btn btn-primary btn-sm">
                    Chirp
                </button>
            </div>
        </form>
    </div>
</div>

<!-- CHIRPS SECTION -->
<section class="mt-16">
    <h2 class="text-3xl font-bold text-center mb-8 text-white">
        Latest Chirps 🐦
    </h2>

    <div class="space-y-4 max-w-2xl mx-auto">
        @forelse ($chirps as $chirp)
            <div class="card bg-base-100 shadow-md hover:scale-[1.02] transition duration-300">
                <div class="card-body">

                    <!-- USER -->
                    <div class="font-semibold text-sm text-gray-500">
                        {{ $chirp->user->name ?? 'Anonymous' }}
                    </div>

                    <!-- MESSAGE -->
                    <p class="text-lg text-base-content">
                        {{ $chirp->message }}
                    </p>

                    <!-- TIME -->
                    <div class="text-xs text-gray-400 mt-2">
                        {{ $chirp->created_at->diffForHumans() }}
                    </div>

                </div>
            </div>
        @empty
            <div class="alert alert-info shadow-lg">
                <span>Belum ada chirps tersedia.</span>
            </div>
        @endforelse
    </div>
</section>

        
    </div>
</x-layout>