<template>
    <div>
        <header class="bg-indigo-600 text-white">
            <nav
                class="max-w-screen-lg mx-auto flex justify-between items-center p-4"
            >
                <div class="space-x-6">
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                </div>
            </nav>
        </header>
        <main>
            <slot />
        </main>
    </div>
</template>
