@extends('frontend.layout.app')
@section('main')
    <div class="h-[30vh] w-full relative flex justify-center items-center">
        <img src={{ asset('cooperativeimages/contactus.jpg') }} class="w-full h-full object-cover ">
        <h1 class="absolute text-white font-bold text-[40px]">Branchs</h1>

    </div>
    <div class="pt-20 px-10 flex">
        <h1 class="text-[40px] font-bold">Our<span class="font-normal text-[40px] text-green-600"> Branches</span>
        </h1>
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" viewBox="0 0 512 512">
                <path fill="#17a60c"
                    d="M42.656 14.72C98.922 34.014 131.682 87.8 93.53 124.97c97.99 81.427 90.47 108.772 11.564 218.06c39.676 27.97 76.053 100.33 70.344 147.91H230.5c-32.26-22.573-43.393-49.275-48.563-74.72c29.67-3.367 57.124-.784 80.282 9.126c3.604 25.136 3.95 49.578 1.28 65.594h18.97c2.28-15.12 2.576-33.896.717-53.688c16.71 12.26 29.993 29.893 38.657 53.688h34.062c-30.534-30.354-48.743-63.438-64.562-97.063a274 274 0 0 1-14.813 3.22c-3.77-15.606-8.914-30.76-15.56-44.19c14.544-19.12 21.514-36.89 20.874-54.53c-.274-7.538-1.884-14.82-4.53-22.03c22.188-6.712 41.265-11.494 60.998-13.564c4.242 21.135 9.946 42.103 17.625 62.783l2.063 5.562l5.906.5c22.146 1.85 41.883 4.926 60.875 9.625c3.94 39.93-6.698 78.297-30.092 118.938c14.673 9.527 26.153 19.857 35.375 30.75h24.406c-40.497-24.248-32.673-75.68-8.22-102.375c21.968 11.687 36.194 23.99 47.844 41.5v-36.125c-26.635-3.933-42.61-21.916-51.22-47.657c16.828 5.22 33.48 11.873 51.157 20.283v-20.625c-19.077-8.64-37.455-15.373-56.31-20.532c-4.706-27.01-3.845-59.278.03-91.875c-28.84 7.984-57.094 11.11-83.906 10.157c-4.173-24.797-6.5-49.993-7.75-75.5l-.656-13.156l-12.22 4.97c-54.128 22.015-119.117 16.334-156.156-10.03C153.216 110.84 147.39 63.24 168 14.72zm285.531 167.03c1.283 20.255 3.302 40.46 6.47 60.53c-52.267-5.78-97.91-27.234-130.063-58.186c37.293 11.99 82.246 11.504 123.594-2.344zm-121.53 50.094c13.693 7.486 27.002 14.627 38.374 24.47c11.47 16.32 17.658 29.84 18.126 42.748c.49 13.534-4.895 27.892-20.437 46.875l-3.97 4.875l3 5.532c6.7 12.27 11.89 27.51 15.688 43.594c-98.4 10.34-144.816-53.688-50.782-168.094zm152.78 29.812c12.68-.05 26.115 1.008 41.157 3.375c10.154 19.476 17.11 38.17 21.062 56.408c-15.91-3.556-32.366-6.114-50.062-7.813c-6.03-17.068-10.72-34.386-14.375-51.938c.738-.01 1.474-.028 2.217-.03z" />
            </svg>
        </div>

    </div>


    <div class="grid grid-cols-3 px-20 gap-10">
        <div class=" relative  text-center bg-slate-50 border rounded-lg">
            <div class= "h-full w-full flex">
                <img src="{{ asset('cooperativeimages/branch1.jpg') }}"
                    class="h-full w-full object-cover border rounded-lg">
                <button type="submit"
                    class="absolute mx-2 my-2 border rounded-full bg-green-500 px-3 py-2 text-white text-[15px]">Kathmandu</button>


                <div
                    class ="flex absolute bottom-0 h-[10vh] w-full bg-green-500 border rounded-lg bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                    <div>
                        <h1 class="text-white text-[20px] pt-2">Abiskar Shrestha</h1>
                        <h1 class="text-white text-[20px] ">(Branch Manager)</h1>

                    </div>
                    <button type="submit" class="absolute my-5 right-5 border rounded-full h-[40%] w-6 bg-white text-xl">
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>

                    </button>
                </div>

            </div>
        </div>


        <div class=" relative  text-center bg-slate-50 border rounded-lg">
            <div class= "h-full w-full flex">
                <img src="{{ asset('cooperativeimages/branch2.jpg') }}"
                    class="h-full w-full object-cover border rounded-lg">
                <button type="submit"
                    class="absolute mx-2 my-2 border rounded-full bg-green-500 px-3 py-2 text-white text-[15px]">Dhangadi</button>


                <div
                    class ="flex absolute bottom-0 h-[10vh] w-full bg-green-500 border rounded-lg bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                    <div>

                        <h1 class="text-white text-[20px] pt-2">Rhythem Phuyal</h1>
                        <h1 class="text-white text-[20px] ">(Branch Manager)</h1>

                    </div>
                    <button type="submit" class="absolute my-5 right-5 border rounded-full h-[40%] w-6 bg-white text-xl">
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>

                    </button>
                </div>

            </div>
        </div>

        <div class=" relative  text-center bg-slate-50 border rounded-lg">
            <div class= "h-full w-full flex">
                <img src="{{ asset('cooperativeimages/branch3.jpg') }}"
                    class="h-full w-full object-cover border rounded-lg">
                <button type="submit"
                    class="absolute mx-2 my-2 border rounded-full bg-green-500 px-3 py-2 text-white text-[15px]">Kathmandu</button>


                <div
                    class ="flex absolute bottom-0 h-[10vh] w-full bg-green-500 border rounded-lg bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                    <div>
                        <h1 class="text-white text-[20px] pt-2">Subashree Shrestha</h1>
                        <h1 class="text-white text-[20px] ">(Branch Manager)</h1>

                    </div>
                    <button type="submit" class="absolute my-5 right-5 border rounded-full h-[40%] w-6 bg-white text-xl">
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>

                    </button>
                </div>

            </div>
        </div>


        <div class=" relative  text-center bg-slate-50 border rounded-lg">
            <div class= "h-full w-full flex">
                <img src="{{ asset('cooperativeimages/branch1.jpg') }}"
                    class="h-full w-full object-cover border rounded-lg">
                <button type="submit"
                    class="absolute mx-2 my-2 border rounded-full bg-green-500 px-3 py-2 text-white text-[15px]">Kathmandu</button>


                <div
                    class ="flex absolute bottom-0 h-[10vh] w-full bg-green-500 border rounded-lg bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                    <div>
                        <h1 class="text-white text-[20px] pt-2">Subekshya Thapa</h1>
                        <h1 class="text-white text-[20px] ">(Branch Manager)</h1>

                    </div>
                    <button type="submit" class="absolute my-5 right-5 border rounded-full h-[40%] w-6 bg-white text-xl">
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>

                    </button>
                </div>

            </div>
        </div>




    </div>
@endsection
