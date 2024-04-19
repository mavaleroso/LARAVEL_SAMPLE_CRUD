<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CPIII TEST SAMPLE CRUD | CREATE STAFF</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                    Staffs
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Show Staff
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                        href="/">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Back
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->
                        <!-- Hire Us -->
                        <div class="max-w-[85rem] px-4 py-6 mx-auto">
                            <div class="max-w-xl mx-auto">
                                <div class="mt-12">
                                    <!-- Form -->
                                    <form">
                                        <div class="grid gap-4 lg:gap-6">
                                            <div>
                                                <label for="name"
                                                    class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Name</label>
                                                <input type="text" name="name" id="name"
                                                    value="{{ $staff->name }}"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    readonly>
                                            </div>

                                            <div>
                                                <label for="email"
                                                    class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Work
                                                    Email</label>
                                                <input type="email" name="email" id="email" autocomplete="email"
                                                    value="{{ $staff->email }}"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    readonly>
                                            </div>

                                            <!-- Grid -->
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                                <div>
                                                    <label for="position"
                                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Position</label>
                                                    <input type="text" name="position" id="position"
                                                        value="{{ $staff->position }}"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                        readonly>
                                                </div>

                                                <div>
                                                    <label for="department"
                                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Department</label>
                                                    <input type="text" name="department" id="department"
                                                        value="{{ $staff->department }}"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                        readonly>
                                                </div>
                                            </div>
                                            <!-- End Grid -->
                                        </div>
                                        <!-- End Grid -->
                                    </form>
                                    <!-- End Form -->
                                </div>
                            </div>
                        </div>
                        <!-- End Hire Us -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</body>

</html>
