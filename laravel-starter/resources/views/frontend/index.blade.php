@extends("frontend.layouts.app")

@section("title")
    {{ app_name() }}
@endsection

{{-- This push adds the animation keyframes to your <head> --}}
@push('styles')
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fadeInUp {
            animation: fadeInUp 0.7s ease-out forwards;
            opacity: 0; /* Start hidden */
        }
    </style>
@endpush

@section("content")
    {{-- 
      Hero Section 
      - Changed background to bg-black
      - Added position: relative and overflow-hidden to contain the canvas
    --}}
    <section class="relative overflow-hidden bg-black">
        
        {{-- Matrix Canvas Background --}}
        <canvas id="matrix-canvas" class="absolute top-0 left-0 z-0 h-full w-full"></canvas>

        {{-- 
          Content Wrapper
          - Added position: relative and z-10 to place content ON TOP of the canvas
        --}}
        <div class="relative z-10 mx-auto max-w-screen-xl px-4 py-24 text-center sm:px-12 lg:py-32">
            <div class="m-6 flex justify-center">
                {{-- Added shadow, rounded-xl, and load animation --}}
                <img
                    class="h-24 rounded-xl shadow-lg animate-fadeInUp"
                    src="{{ asset("img/logo-square.jpg") }}"
                    alt="{{ app_name() }}"
                    style="animation-delay: 0.1s"
                />
            </div>
            <h1
                class="mb-6 text-4xl font-extrabold leading-none tracking-tight animate-fadeInUp sm:text-6xl bg-clip-text text-transparent bg-gradient-to-r from-green-400 to-blue-500"
                style="animation-delay: 0.2s"
            >
                {{ app_name() }}
            </h1>
            <p
                {{-- Changed text color for readability on black background --}}
                class="mb-10 text-lg font-normal text-gray-300 sm:px-16 sm:text-2xl xl:px-48 dark:text-gray-200 animate-fadeInUp"
                style="animation-delay: 0.3s"
            >
                {!! setting("app_description") !!}
            </p>
            <div
                class="mb-8 flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4 lg:mb-16 animate-fadeInUp"
                style="animation-delay: 0.4s"
            >
                {{-- Added transition and hover effects --}}
                <a
                    class="inline-flex items-center justify-center rounded-lg bg-gray-800 px-5 py-3 text-center text-base font-medium text-white shadow-md transition-all duration-300 ease-in-out hover:-translate-y-1 hover:bg-gray-900 hover:shadow-lg focus:ring-4 focus:ring-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                    href="https://github.com/CodeArtisanDurjoy/laravel-starter"
                    target="_blank"
                >
                    <svg
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-github"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"
                        />
                    </svg>
                    <span class="ms-2">Github</span>
                </a>
                {{-- Added transition and hover effects --}}
                <a
                    class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-3 text-center text-base font-medium text-gray-900 shadow-md transition-all duration-300 ease-in-out hover:-translate-y-1 hover:bg-gray-100 hover:shadow-lg focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white dark:focus:ring-gray-800"
                    href="https://bash-baba-portfolio.onrender.com/"
                    target="_blank"
                >
                    <svg
                        class="icon icon-tabler icons-tabler-outline icon-tabler-world-www"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M19.5 7a9 9 0 0 0 -7.5 -4a8.991 8.991 0 0 0 -7.484 4" />
                        <path d="M11.5 3a16.989 16.989 0 0 0 -1.826 4" />
                        <path d="M12.5 3a16.989 16.989 0 0 1 1.828 4" />
                        <path d="M19.5 17a9 9 0 0 1 -7.5 4a8.991 8.991 0 0 1 -7.484 -4" />
                        <path d="M11.5 21a16.989 16.989 0 0 1 -1.826 -4" />
                        <path d="M12.5 21a16.989 16.989 0 0 0 1.828 -4" />
                        <path d="M2 10l1 4l1.5 -4l1.5 4l1 -4" />
                        <path d="M17 10l1 4l1.5 -4l1.5 4l1 -4" />
                        <path d="M9.5 10l1 4l1.5 -4l1.5 4l1 -4" />
                    </svg>
                    <span class="ms-2">Website</span>
                </a>
            </div>

            @include("frontend.includes.messages")
        </div>
    </section>

      
@endsection

{{-- This new push adds the Matrix rain JavaScript to your page --}}
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const canvas = document.getElementById('matrix-canvas');
            const ctx = canvas.getContext('2d');

            // Set canvas dimensions to match its container
            const setCanvasDimensions = () => {
                canvas.width = canvas.offsetWidth;
                canvas.height = canvas.offsetHeight;
            };
            
            setCanvasDimensions();

            // Characters to use (Katakana, numbers, letters)
            const katakana = 'アァカサタナハマヤャラワガザダバパイィキシチニヒミリヰギジヂビピウゥクスツヌフムユュルグズブヅプエェケセテネヘメレヱゲゼデベペオォコソトノホモヨョロヲゴゾドボポヴッン';
            const latin = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            const nums = '0123456789';
            const alphabet = katakana + latin + nums;

            const fontSize = 16;
            const columns = Math.floor(canvas.width / fontSize);

            // Array to store the y-position of each column's "drop"
            const drops = [];
            for (let x = 0; x < columns; x++) {
                drops[x] = 1;
            }

            const draw = () => {
                // Fill the canvas with a semi-transparent black
                // This creates the "fading" trail effect
                ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
                ctx.fillRect(0, 0, canvas.width, canvas.height);

                // Set text color to matrix green
                ctx.fillStyle = '#0F0'; // Or '#32CD32' (limegreen)
                ctx.font = `${fontSize}px monospace`;

                // Loop through each column
                for (let i = 0; i < drops.length; i++) {
                    // Get a random character from the alphabet
                    const text = alphabet.charAt(Math.floor(Math.random() * alphabet.length));
                    
                    // Draw the character
                    ctx.fillText(text, i * fontSize, drops[i] * fontSize);

                    // Move the drop down for the next frame
                    drops[i]++;

                    // If the drop has moved off-screen, reset it to the top with a random chance
                    if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                        drops[i] = 0;
                    }
                }
            };

            // Start the animation loop
            const matrixInterval = setInterval(draw, 33); // ~30 FPS

            // Recalculate dimensions on window resize
            window.addEventListener('resize', () => {
                setCanvasDimensions();
                // We need to reset columns and drops array if width changes
                const newColumns = Math.floor(canvas.width / fontSize);
                if (newColumns !== columns) {
                    drops.length = 0; // Clear old array
                    for (let x = 0; x < newColumns; x++) {
                        drops[x] = 1;
                    }
                }
            });

            // Optional: Stop the interval if the user navigates away
            // This is good practice for performance
            document.addEventListener('visibilitychange', () => {
                if (document.hidden) {
                    clearInterval(matrixInterval);
                } else {
                    // Check if it was cleared before restarting
                    if (matrixInterval) {
                        clearInterval(matrixInterval);
                    }
                    setInterval(draw, 33);
                }
            });
        });
    </script>
@endpush