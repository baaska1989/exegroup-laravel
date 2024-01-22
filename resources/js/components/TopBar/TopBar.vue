<template>
    <div class="h-[67px] z-[51] flex items-center relative border-b border-slate-200">
        <nav class="flex hidden mr-auto -intro-x sm:flex" aria-label="breadcrumb">
            <ol class="flex items-center text-primary dark:text-slate-300">
                <li class="">
                    <router-link :to="{name: 'AdminDashboard'}" class="router-link-active router-link-exact-active" aria-current="page"> Breathrise </router-link>
                </li>
                <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-bredcrumb-chevron-dark before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-bredcrumb-chevron-darkmode text-slate-800 cursor-text dark:text-slate-400">
                    <a href="/" class="router-link-active router-link-exact-active" aria-current="page">  </a>
                </li>
            </ol>
        </nav>

        <div class="relative mr-auto intro-x sm:mr-6">
            <div class="cursor-pointer relative text-slate-600 outline-none block before:content-[''] before:w-[8px] before:h-[8px] before:rounded-full before:absolute before:top-[-2px] before:right-0 before:bg-danger" id="headlessui-popover-button-1" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-[1.3] w-5 h-5 dark:text-slate-500 w-5 h-5 dark:text-slate-500">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
            </div>
        </div>

        <div style="position: fixed; height: 0px; padding: 0px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px; display: none;">

        </div>
        <div class="relative">
            <div class="cursor-pointer block w-8 h-8 overflow-hidden rounded-full shadow-lg image-fit zoom-in intro-x" disabled="false" id="headlessui-menu-button-3" aria-haspopup="menu" aria-expanded="false">
               <img alt="Midone Tailwind HTML Admin Template" src="/images/dondogmaa.png">
            </div>
<!--            <div class="absolute z-30 top-[100%] right-0 mt-1">-->
<!--                <div class="p-2 shadow-[0px_3px_10px_#00000017] border-transparent rounded-md dark:bg-darkmode-600 dark:border-transparent w-56 mt-px text-white bg-primary" aria-labelledby="headlessui-menu-button-3" id="headlessui-menu-items-7" role="menu" tabindex="0">-->
<!--                    <div class="p-2 font-normal" role="none">-->
<!--                        <div class="font-medium" role="none">Arnold Schwarzenegger</div>-->
<!--                        <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500" role="none">DevOps Engineer</div>-->
<!--                    </div><div class="h-px my-2 -mx-2 dark:bg-darkmode-400 bg-white/[0.08]" role="none">-->

<!--                </div>-->
<!--                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md dark:bg-darkmode-600 dark:hover:bg-darkmode-400 hover:bg-white/5" id="headlessui-menu-item-8" role="menuitem" tabindex="-1">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-[1.3] w-4 h-4 mr-2 w-4 h-4 mr-2">-->
<!--                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>-->
<!--                        <circle cx="12" cy="7" r="4"></circle>-->
<!--                    </svg> Profile </a>-->
<!--                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md dark:bg-darkmode-600 dark:hover:bg-darkmode-400 hover:bg-white/5" id="headlessui-menu-item-9" role="menuitem" tabindex="-1">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-[1.3] w-4 h-4 mr-2 w-4 h-4 mr-2">-->
<!--                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>-->
<!--                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>-->
<!--                </svg> Add Account </a>-->
<!--                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md dark:bg-darkmode-600 dark:hover:bg-darkmode-400 hover:bg-white/5" id="headlessui-menu-item-10" role="menuitem" tabindex="-1">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-[1.3] w-4 h-4 mr-2 w-4 h-4 mr-2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>-->
<!--                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> Reset Password-->
<!--                    </a>-->
<!--                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md dark:bg-darkmode-600 dark:hover:bg-darkmode-400 hover:bg-white/5" id="headlessui-menu-item-11" role="menuitem" tabindex="-1">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-[1.3] w-4 h-4 mr-2 w-4 h-4 mr-2">-->
<!--                        <circle cx="12" cy="12" r="10"></circle>-->
<!--                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>-->
<!--                        <line x1="12" y1="17" x2="12.01" y2="17"></line></svg> Help </a>-->
<!--                    <div class="h-px my-2 -mx-2 dark:bg-darkmode-400 bg-white/[0.08]" role="none"></div>-->
<!--                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md dark:bg-darkmode-600 dark:hover:bg-darkmode-400 hover:bg-white/5" id="headlessui-menu-item-12" role="menuitem" tabindex="-1">-->
<!--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-[1.3] w-4 h-4 mr-2 w-4 h-4 mr-2"><rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>-->
<!--                    <circle cx="16" cy="12" r="3"></circle>-->
<!--                    </svg> Logout-->
<!--                </a>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</template>

<script>
export default
{
    data()
    {

    }
}
</script>

