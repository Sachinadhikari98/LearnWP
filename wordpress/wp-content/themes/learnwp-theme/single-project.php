<?php get_header(); ?>

<main class="flex flex-col gap-12 pt-8">
    <div class="bg-cover bg-center flex flex-col justify-end overflow-hidden rounded-xl min-h-120" data-alt="Abstract hero image for the Acme Corp redesign project, showing vibrant geometric shapes." style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 35%), url("<?php the_post_thumbnail_url() ?>");'>
        <div class="flex p-8">
            <h1 class="text-white tracking-tight text-5xl font-bold leading-tight"><?php the_title() ?></h1>
        </div>
    </div>
    <div class="px-4">
        <p class="text-lg font-normal leading-relaxed text-center text-[#618389] dark:text-gray-400">A comprehensive UX overhaul and visual redesign for a leading enterprise SaaS platform, focusing on improving user workflow efficiency and modernizing the interface.</p>
    </div>
    <div class="border rounded-xl bg-white dark:bg-background-dark dark:border-gray-700">
        <div class="p-8">
            <div class="mt-8 grid grid-cols-3">
                <div class="flex flex-col gap-1 py-4 pr-2">
                    <p class="text-[#618389] dark:text-gray-400 text-sm font-normal leading-normal">Client</p>
                    <p class="dark:text-white text-sm font-normal leading-normal"><?php echo esc_html(get_field('client_name')); ?></p>
                </div>
                <div class="flex flex-col gap-1 py-4 px-2">
                    <p class="text-[#618389] dark:text-gray-400 text-sm font-normal leading-normal">Role</p>
                    <p class="dark:text-white text-sm font-normal leading-normal">Lead Designer</p>
                </div>
                <div class="flex flex-col gap-1 py-4 pl-2">
                    <p class="text-[#618389] dark:text-gray-400 text-sm font-normal leading-normal">Year</p>
                    <p class="dark:text-white text-sm font-normal leading-normal">2023</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-10 px-4">
        <div class="flex flex-col gap-4">
            <h3 class="text-2xl font-bold tracking-tight dark:text-white">The Challenge</h3>
            <p class="text-base font-normal leading-relaxed text-[#618389] dark:text-gray-400">The existing platform, while powerful, suffered from an outdated user interface and a convoluted user experience. Key user workflows were inefficient, leading to increased training time for new customers and frequent support requests. The primary challenge was to redesign the entire application to be more intuitive, visually appealing, and aligned with modern SaaS standards, without disrupting the core functionality that existing users relied on.</p>
        </div>
        <div class="flex flex-col gap-4">
            <h3 class="text-2xl font-bold tracking-tight dark:text-white">The Process</h3>
            <p class="text-base font-normal leading-relaxed text-[#618389] dark:text-gray-400">Our process began with extensive user research, including interviews and usability testing of the existing platform. This allowed us to identify key pain points and areas for improvement. We then moved into wireframing and prototyping in Figma, creating low-fidelity and high-fidelity mockups for stakeholder review and user feedback. Iterative design cycles based on this feedback were crucial to refining the final solution.</p>
        </div>
        <img alt="A designer's desk with a laptop showing UI designs, a tablet, and a notebook." class="w-full rounded-xl" data-alt="A designer's desk with a laptop showing UI designs, a tablet, and a notebook." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDd3r6ZmfVuPJN4ZQ9zZbCjXBUHsnoEsUG304oV-mR_Cb7FMAyU3-gRCa3IrVKXkc7b4HPjVwnFnWUT0yPlaMJd9Es3ITMaOn72pr7CzTpOf5Ue9RNTHt1_iZChWemCONhSgpDI2E5FrY0svi6GoRG3mPuq0-fl94c3NhHQ8obie7rkTRIRFTwPsiz16y2kjhWPDLddKWkeZc8PlLJ43u-8xXMKr_C2zIPCCH6vlJbR3sBzpo4OzkI5U4SjtCUyso32nLM7i1Bi_9rj" />
        <div class="flex flex-col gap-4">
            <h3 class="text-2xl font-bold tracking-tight dark:text-white">The Solution</h3>
            <p class="text-base font-normal leading-relaxed text-[#618389] dark:text-gray-400">The final product is a clean, modern, and highly intuitive user interface. We introduced a new design system with a consistent visual language, simplified navigation, and streamlined key workflows. The result was a 40% reduction in time-on-task for critical user journeys and a significant increase in user satisfaction scores. The redesigned platform is not only more efficient but also more enjoyable to use, helping Acme Corp improve customer retention and attract new clients.</p>
        </div>
        <div class="grid grid-cols-2 gap-6">
            <img alt="Close up of a mobile app user interface design on a screen." class="w-full rounded-xl" data-alt="Close up of a mobile app user interface design on a screen." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1ipyA-2sURqsDF_dEfbsPGEJUKoomg_oL08094Rzdhnmu4Hm0y-yTBbRdfRXFF31gkdyGaX5ahTcWVZUZWEPFpLmWvIF1U-KN5112ix7gjTJuyW8u_Nda3eDPQnRCcxxzqg5N6Q6QDYZ86WoJnktDF36VUlE_bCDuYf3GUYN8-u1ObGv-Qy7OHgaBszfxDvvJAPGoZf4AX9mAG_-DKZ3wnQFlMgdmHiYY4QaQF0CPF51UMIPhC8Xhou6Zm-muSSCTfi1caZTz6hiE" />
            <img alt="Person working on a laptop with code on the screen, sitting next to a coffee cup." class="w-full rounded-xl" data-alt="Person working on a laptop with code on the screen, sitting next to a coffee cup." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpuI2fjByW4mEDUcpMZIw3PwB9gBLfGegCQyOBFjfQm7nxcNEdqiatmyaIv7wKYaGO4wWpFGrup1qTAO6C3uUE7m1wOMbHUI6-oFpLY9YcmcZn_kHYoO4a8vEFBn0eUIAY-07dMbDQlTHHvFLqPNQfLzXTdVxL2ekMwSBIAVCrtj_vnTX32Yuys7HR3qleV50t9KQ6EKnCcgvpS2S3gLJ4uRuP50gPypQfphO-AvlEETU0aa6rw24WqVCKexSi0CI7vCV8GdvTkoYa" />
        </div>
    </div>
    <div class="flex items-center justify-between border-t border-solid border-t-[#dbe4e6] dark:border-gray-700 mt-12 pt-8 px-4">
        <a class="flex items-center gap-2 text-sm font-medium hover:text-primary dark:text-gray-300 dark:hover:text-primary" href="#">
            <span class="material-symbols-outlined">arrow_back</span>
            <span>Previous Project</span>
        </a>
        <a class="flex items-center gap-2 text-sm font-medium hover:text-primary dark:text-gray-300 dark:hover:text-primary" href="#">
            <span>Next Project</span>
            <span class="material-symbols-outlined">arrow_forward</span>
        </a>
    </div>
</main>
<?php get_footer() ?>