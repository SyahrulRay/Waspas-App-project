<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section id="dashboard" class="bg-white py-16 h-screen">
        <div class="container mx-auto px-8 items-center mt-14">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Welcome to My Website</h2>
                    <p class="text-xl text-gray-600 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded" href="#">Learn More</a>
                </div>
                <div>
                    <img class="w-screen" src="https://static.vecteezy.com/system/resources/previews/003/475/012/original/confused-man-with-question-mark-concept-flat-illustration-free-vector.jpg" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <section id="{{ __('add') }}" class=" py-16 h-screen add  dark:bg-yellow-100">
        <div class="container mx-auto px-8 items-center justify-center mt-14">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-950 mb-8 text-center">Add Problem</h2>
            <div class="container mx-auto px-8 items-center mt-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div>
                        <img class="w-screen h-full mix-blend-multiply" src="https://img.freepik.com/premium-vector/people-thinking-make-decision-problem-solving-find-creative-ideas-flat-illustration_2175-3907.jpg" alt="Image">
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Welcome to My Website</h2>
                        <p class="text-xl text-gray-600 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded" href="{{ route('table') }}">Add</a>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section id="history" class="bg-gray-100 py-16 h-screen">
        <div class="container mx-auto px-8 mt-14">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center">Contact Me</h2>
            <form class="max-w-lg mx-auto">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" rows="4" placeholder="Enter your message"></textarea>
                </div>
                <div class="flex justify-center">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Send</button>
                </div>
            </form>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-8">
            <div class="flex justify-between items-center">
                <p>&copy; 2023 My Personal Website. All rights reserved.</p>
                <ul class="space-x-4">
                    <li class="inline-block"><a class="text-gray-400 hover:text-white" href="#">Privacy Policy</a></li>
                    <li class="inline-block"><a class="text-gray-400 hover:text-white" href="#">Terms of Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

</x-app-layout>