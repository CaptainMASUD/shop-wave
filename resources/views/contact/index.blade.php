@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    {{-- TOP BANNER --}}
    <section class="bg-gradient-to-b from-orange-50 via-white to-white py-14 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-orange-100 text-orange-600 text-sm font-semibold mb-4">
                    Contact Us
                </span>
                <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-slate-900">
                    We’d Love To Hear From You
                </h1>
                <p class="mt-4 max-w-2xl mx-auto text-slate-500 text-base sm:text-lg leading-8 font-medium">
                    Have a question about products, orders, delivery, or support? Send us a message and our team will get back to you soon.
                </p>
            </div>
        </div>
    </section>

    {{-- CONTACT INFO --}}
    <section class="pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="bg-white border border-slate-200 rounded-[24px] p-6 shadow-soft">
                    <div class="w-12 h-12 rounded-2xl bg-orange-100 text-orange-600 flex items-center justify-center mb-4">
                        <x-heroicon-o-map-pin class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Our Address</h3>
                    <p class="text-sm text-slate-500 leading-7 mt-2">
                        123 Shop Street, Dhaka, Bangladesh
                    </p>
                </div>

                <div class="bg-white border border-slate-200 rounded-[24px] p-6 shadow-soft">
                    <div class="w-12 h-12 rounded-2xl bg-orange-100 text-orange-600 flex items-center justify-center mb-4">
                        <x-heroicon-o-phone class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Phone Number</h3>
                    <p class="text-sm text-slate-500 leading-7 mt-2">
                        +880 1234 567890
                    </p>
                </div>

                <div class="bg-white border border-slate-200 rounded-[24px] p-6 shadow-soft">
                    <div class="w-12 h-12 rounded-2xl bg-orange-100 text-orange-600 flex items-center justify-center mb-4">
                        <x-heroicon-o-envelope class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Email Address</h3>
                    <p class="text-sm text-slate-500 leading-7 mt-2">
                        hello@shopwave.com
                    </p>
                </div>

                <div class="bg-white border border-slate-200 rounded-[24px] p-6 shadow-soft">
                    <div class="w-12 h-12 rounded-2xl bg-orange-100 text-orange-600 flex items-center justify-center mb-4">
                        <x-heroicon-o-clock class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Working Hours</h3>
                    <p class="text-sm text-slate-500 leading-7 mt-2">
                        Sat - Thu: 9:00 AM - 8:00 PM
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT FORM + MAP --}}
    <section class="pb-20 pt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8">

                {{-- FORM --}}
                <div class="bg-white border border-slate-200 rounded-[28px] p-6 sm:p-8 shadow-soft">
                    <div class="mb-6">
                        <span class="text-orange-500 uppercase tracking-[0.22em] text-xs font-bold">Send Message</span>
                        <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 mt-3">
                            Get In Touch
                        </h2>
                        <p class="text-slate-500 text-sm sm:text-base mt-3 leading-7">
                            Fill out the form below and we will respond as soon as possible.
                        </p>
                    </div>

                    <form class="space-y-5">
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">First Name</label>
                                <input
                                    type="text"
                                    placeholder="Enter first name"
                                    class="w-full px-5 py-3.5 rounded-full border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                                >
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Last Name</label>
                                <input
                                    type="text"
                                    placeholder="Enter last name"
                                    class="w-full px-5 py-3.5 rounded-full border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                                >
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                                <input
                                    type="email"
                                    placeholder="Enter email address"
                                    class="w-full px-5 py-3.5 rounded-full border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                                >
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number</label>
                                <input
                                    type="text"
                                    placeholder="Enter phone number"
                                    class="w-full px-5 py-3.5 rounded-full border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                                >
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Subject</label>
                            <input
                                type="text"
                                placeholder="Enter subject"
                                class="w-full px-5 py-3.5 rounded-full border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Message</label>
                            <textarea
                                rows="6"
                                placeholder="Write your message..."
                                class="w-full px-5 py-4 rounded-[24px] border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300 resize-none"
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-orange-500 text-white text-sm sm:text-base font-semibold shadow-lg shadow-orange-500/20 hover:bg-orange-600 transition"
                        >
                            Send Message
                        </button>
                    </form>
                </div>

                {{-- MAP / INFO BLOCK --}}
                <div class="space-y-8">
                    <div class="bg-white border border-slate-200 rounded-[28px] overflow-hidden shadow-soft">
                        <div class="h-[320px] sm:h-[420px] bg-slate-100 flex items-center justify-center">
                            <div class="text-center px-6">
                                <div class="w-16 h-16 mx-auto rounded-full bg-orange-100 text-orange-600 flex items-center justify-center mb-4">
                                    <x-heroicon-o-map class="w-8 h-8" />
                                </div>
                                <h3 class="text-xl font-bold text-slate-900">Map Location</h3>
                                <p class="text-slate-500 text-sm sm:text-base mt-2 leading-7">
                                    You can embed your Google Map here later using an iframe.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-slate-950 rounded-[28px] p-8 text-white shadow-soft">
                        <span class="text-orange-400 uppercase tracking-[0.22em] text-xs font-bold">Need Quick Help?</span>
                        <h3 class="text-2xl sm:text-3xl font-black tracking-tight mt-3">
                            Our Support Team Is Ready
                        </h3>
                        <p class="text-slate-300 mt-4 leading-8 text-sm sm:text-base">
                            Reach out for order help, product questions, delivery information, or general support. We’ll be happy to assist you.
                        </p>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="tel:+8801234567890" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600 transition">
                                Call Now
                            </a>
                            <a href="mailto:hello@shopwave.com" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-white/10 border border-white/10 text-white text-sm font-semibold hover:bg-white/20 transition">
                                Email Us
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection