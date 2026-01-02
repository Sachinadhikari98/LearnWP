<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Home Screen</title>
    <?php wp_head(); ?>

</head>

<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <div class="flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-240 flex-1 px-4 sm:px-10">
                    <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-gray-200 dark:border-gray-800 py-4">
                        <a href="<?php echo home_url() ?>">
                            <div class="flex items-center gap-4">
                                <div class="size-6 text-primary">
                                    <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_6_330)">
                                            <path clip-rule="evenodd" d="M24 0.757355L47.2426 24L24 47.2426L0.757355 24L24 0.757355ZM21 35.7574V12.2426L9.24264 24L21 35.7574Z" fill="currentColor" fill-rule="evenodd"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6_330">
                                                <rect fill="white" height="48" width="48"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Olivia Chen</h2>
                            </div>
                        </a>
                        <div class="hidden sm:flex flex-1 justify-end gap-8">
                            <div class="flex items-center gap-9">
                                <a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Work</a>
                                <a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">About</a>
                                <a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Contact</a>
                            </div>
                        </div>
                    </header>