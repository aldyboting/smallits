<x-formcivitas-layout>
    <x-slot name="header">
        <div class="grid grid-cols-3 divide-opacity-0">
            <div>
                <h2 class="font-semibold text-2xl text-white leading-tight text-left">
                    {{ __('Add Civitas') }}
                </h2>
            </div>
            <div>
                <img class="object-contain h-8 leading-tight mx-auto" src="https://4.bp.blogspot.com/-i5MLRxGuK5s/VVADS3PUL2I/AAAAAAAAQ20/3RljzZYiHeA/s1600/logo-its-putih-transparan.png" alt="ITS Logo">
            </div>
            <div>
                <h2 class="font-bold text-2xl text-white leading-tight text-right">
                    SMALL ITS
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 my-4 mx-6">
            <div class="w-full min-w-fit py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <h2 class="text-gray-800 text-xl font-semibold text-center">Tambah Data Civitas Akademika ITS</h2>
                </div>
            </div>

            <div class="w-full min-w-fit py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <form class="w-full ">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Nama Depan
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                            <p class="text-red-500 text-xs italic">Harap isi kolom ini.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Nama Belakang
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Alamat Email
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="budi@abc.com">
                            <p class="text-gray-600 text-xs italic">Masukkan Alamat Email</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Password
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
                            <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Nomor Telepon
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="081291029102">
                            <p class="text-gray-600 text-xs italic">Masukkan Nomor Telepon</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Alamat (Sesuai KTP)
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="JL. Raya ITS, Sukolilo">
                            <p class="text-gray-600 text-xs italic">Masukkan Alamat Domisili</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Tanggal Lahir
                            </label>
                            <div class="flex items-center justify-center bg-gray-200 h-full">
                                <link
                                    rel="stylesheet"
                                    href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
                                />
                                <script
                                    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
                                    defer
                                ></script>

                                <style>
                                    [x-cloak] {
                                    display: none;
                                    }
                                </style>

                                <div class="antialiased sans-serif">
                                    <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                                    <div class="container mx-auto px-4 py-2 md:py-10">
                                        <div class="mb-5 w-64">
                                        <label for="datepicker" class="font-bold mb-1 text-gray-700 block"
                                            >Select Date</label
                                        >
                                        <div class="relative">
                                            <input type="hidden" name="date" x-ref="date" />
                                            <input
                                            type="text"
                                            readonly
                                            x-model="datepickerValue"
                                            @click="showDatepicker = !showDatepicker"
                                            @keydown.escape="showDatepicker = false"
                                            class="
                                                w-full
                                                pl-4
                                                pr-10
                                                py-3
                                                leading-none
                                                rounded-lg
                                                shadow-sm
                                                focus:outline-none focus:shadow-outline
                                                text-gray-600
                                                font-medium
                                            "
                                            placeholder="Select date"
                                            />

                                            <div class="absolute top-0 right-0 px-3 py-2">
                                            <svg
                                                class="h-6 w-6 text-gray-400"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                                />
                                            </svg>
                                            </div>

                                            <!-- <div x-text="no_of_days.length"></div>
                                                        <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                        <div x-text="new Date(year, month).getDay()"></div> -->

                                            <div
                                            class="
                                                bg-white
                                                mt-12
                                                rounded-lg
                                                shadow
                                                p-4
                                                absolute
                                                top-0
                                                left-0
                                            "
                                            style="width: 17rem"
                                            x-show.transition="showDatepicker"
                                            @click.away="showDatepicker = false"
                                            >
                                            <div class="flex justify-between items-center mb-2">
                                                <div>
                                                <span
                                                    x-text="MONTH_NAMES[month]"
                                                    class="text-lg font-bold text-gray-800"
                                                ></span>
                                                <span
                                                    x-text="year"
                                                    class="ml-1 text-lg text-gray-600 font-normal"
                                                ></span>
                                                </div>
                                                <div>
                                                <button
                                                    type="button"
                                                    class="
                                                    transition
                                                    ease-in-out
                                                    duration-100
                                                    inline-flex
                                                    cursor-pointer
                                                    hover:bg-gray-200
                                                    p-1
                                                    rounded-full
                                                    "
                                                    :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                    :disabled="month == 0 ? true : false"
                                                    @click="month--; getNoOfDays()"
                                                >
                                                    <svg
                                                    class="h-6 w-6 text-gray-500 inline-flex"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15 19l-7-7 7-7"
                                                    />
                                                    </svg>
                                                </button>
                                                <button
                                                    type="button"
                                                    class="
                                                    transition
                                                    ease-in-out
                                                    duration-100
                                                    inline-flex
                                                    cursor-pointer
                                                    hover:bg-gray-200
                                                    p-1
                                                    rounded-full
                                                    "
                                                    :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                    :disabled="month == 11 ? true : false"
                                                    @click="month++; getNoOfDays()"
                                                >
                                                    <svg
                                                    class="h-6 w-6 text-gray-500 inline-flex"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 5l7 7-7 7"
                                                    />
                                                    </svg>
                                                </button>
                                                </div>
                                            </div>

                                            <div class="flex flex-wrap mb-3 -mx-1">
                                                <template x-for="(day, index) in DAYS" :key="index">
                                                <div style="width: 14.26%" class="px-1">
                                                    <div
                                                    x-text="day"
                                                    class="text-gray-800 font-medium text-center text-xs"
                                                    ></div>
                                                </div>
                                                </template>
                                            </div>

                                            <div class="flex flex-wrap -mx-1">
                                                <template x-for="blankday in blankdays">
                                                <div
                                                    style="width: 14.28%"
                                                    class="
                                                    text-center
                                                    border
                                                    p-1
                                                    border-transparent
                                                    text-sm
                                                    "
                                                ></div>
                                                </template>
                                                <template
                                                x-for="(date, dateIndex) in no_of_days"
                                                :key="dateIndex"
                                                >
                                                <div style="width: 14.28%" class="px-1 mb-1">
                                                    <div
                                                    @click="getDateValue(date)"
                                                    x-text="date"
                                                    class="
                                                        cursor-pointer
                                                        text-center text-sm
                                                        leading-none
                                                        rounded-full
                                                        leading-loose
                                                        transition
                                                        ease-in-out
                                                        duration-100
                                                    "
                                                    :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"
                                                    ></div>
                                                </div>
                                                </template>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    <script>
                                    const MONTH_NAMES = [
                                        "January",
                                        "February",
                                        "March",
                                        "April",
                                        "May",
                                        "June",
                                        "July",
                                        "August",
                                        "September",
                                        "October",
                                        "November",
                                        "December",
                                    ];
                                    const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

                                    function app() {
                                        return {
                                        showDatepicker: false,
                                        datepickerValue: "",

                                        month: "",
                                        year: "",
                                        no_of_days: [],
                                        blankdays: [],
                                        days: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],

                                        initDate() {
                                            let today = new Date();
                                            this.month = today.getMonth();
                                            this.year = today.getFullYear();
                                            this.datepickerValue = new Date(
                                            this.year,
                                            this.month,
                                            today.getDate()
                                            ).toDateString();
                                        },

                                        isToday(date) {
                                            const today = new Date();
                                            const d = new Date(this.year, this.month, date);

                                            return today.toDateString() === d.toDateString() ? true : false;
                                        },

                                        getDateValue(date) {
                                            let selectedDate = new Date(this.year, this.month, date);
                                            this.datepickerValue = selectedDate.toDateString();

                                            this.$refs.date.value =
                                            selectedDate.getFullYear() +
                                            "-" +
                                            ("0" + selectedDate.getMonth()).slice(-2) +
                                            "-" +
                                            ("0" + selectedDate.getDate()).slice(-2);

                                            console.log(this.$refs.date.value);

                                            this.showDatepicker = false;
                                        },

                                        getNoOfDays() {
                                            let daysInMonth = new Date(
                                            this.year,
                                            this.month + 1,
                                            0
                                            ).getDate();

                                            // find where to start calendar day of week
                                            let dayOfWeek = new Date(this.year, this.month).getDay();
                                            let blankdaysArray = [];
                                            for (var i = 1; i <= dayOfWeek; i++) {
                                            blankdaysArray.push(i);
                                            }

                                            let daysArray = [];
                                            for (var i = 1; i <= daysInMonth; i++) {
                                            daysArray.push(i);
                                            }

                                            this.blankdays = blankdaysArray;
                                            this.no_of_days = daysArray;
                                        },
                                        };
                                    }
                                    </script>
                                </div>
                                </div>
                            <p class="text-gray-600 text-xs italic">Masukkan Tanggal Lahir</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Jenis Kelamin
                            </label>
                            <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                    <option>Pria</option>
                                    <option>Wanita</option>
                            </select>
                            <p class="text-gray-600 text-xs italic">Masukkan Jenis Kelamin</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                NIM/NRP/NIP
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="05211840000080">
                            <p class="text-gray-600 text-xs italic">Masukkan NIM/NRP/NIP</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Jabatan
                            </label>
                            <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                    <option>Mahasiswa</option>
                                    <option>Dosen</option>
                                    <option>Tendik</option>
                                    <option>Karyawan</option>
                                    <option>DPTSI</option>
                                    <option>Komersil</option>
                            </select>
                            <p class="text-gray-600 text-xs italic">Masukkan Jabatan Anda</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Departemen
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Sistem Informasi">
                            <p class="text-gray-600 text-xs italic">Masukkan Nama Departemen Asal Anda</p>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</x-formcivitas-layout>
