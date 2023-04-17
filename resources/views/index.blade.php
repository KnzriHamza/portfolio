<!doctype html>
<html lang="en" class="bg-black">
<head>
  <!-- HERE PLACE FOR GOOGLE ANALYTICS SCRIPT -->

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>

  <!-- UNCOMMENT THAT WHAT YOU NEED -->

  <!-- <meta name="description" content="your own description"> -->
  <meta name="author" content="Jakub Gania">
  <!-- <meta name="keywords" content="your keywords"> -->

  <!-- https://ogp.me -->

  <!-- <meta property="og:title" content="template-1"> -->
  <!-- <meta property="og:type" content="website"> -->
  <!-- <meta property="og:url" content="your own domain / url"> -->
  <!-- <meta property="og:description" content="your own description"> -->
  <!-- <meta property="og:locale" content="en_US"> -->
  <!-- <meta property="og:image" content="path to photo"> -->
  <!-- <meta property="og:image:secure_url" content="path to photo"> -->
  <!-- <meta property="og:image:width" content="1200"> -->
  <!-- <meta property="og:image:height" content="630"> -->

  <!-- <meta name="twitter:card" content="summary_large_image" /> -->
  <!-- <meta name="twitter:creator" content="@your_twitter_username" /> -->

  <!-- <link rel="icon" type="image/png" sizes="512x512" href="path to icon" /> -->
  <!-- <link rel="icon" type="image/png" sizes="384x384" href="path to icon" /> -->
  <!-- <link rel="icon" type="image/png" sizes="192x192" href="path to icon" /> -->
  <!-- <link rel="icon" type="image/png" sizes="48x48" href="path to icon" /> -->
  <!-- <link rel="icon" type="image/png" sizes="32x32" href="path to icon" /> -->
  <!-- <link rel="icon" type="image/png" sizes="16x16" href="path to icon" /> -->

  <!-- <link href="../dist/output.css" rel="stylesheet"> -->
  <link href="{{asset('frontend/output.css')}}" rel="stylesheet">
</head>
<body>
  <div class="max-w-3xl mx-auto font-mono p-4 sm:p-3 md:p-2">
    <div class="my-16 sm:my-24 md:my-32">
      <div class="flex items-center justify-end">
        <div class="mr-4 sm:mr-8 text-right">
          <span class="text-2xl sm:text-3xl md:text-4xl text-slate-300 font-bold tracking-wide">
            {{$informationData->name}}
          </span>
          <p class="text-sm sm:text-base text-slate-500">
            {{$informationData->postStatus}}
          </p>
        </div>
        <div>
          <img src="{{asset('frontend/public/icons8-metamask-logo-96.png')}}" width="96" />
        </div>
      </div>
    </div>
    <div class="mb-12">
      <p class="text-gray-200">
        Hi!, I'm a Web <span class="text-sky-500 font-bold">Developer</span>.
      </p>
      <p class="text-gray-200">
        I <span class="">develop</span> huge applications.
      </p>
      <p class="text-gray-200">
        I code day and night.
      </p>
      <p class="text-gray-200">
        I like coffee and minimal techno.
      </p>
    </div>
    <div class="mb-12">
      <h2 class="text-xl sm:text-2xl md:text-3xl mb-6 text-gray-400">
        Information
      </h2>
      <div class="text-gray-200 cursor-default">
        <div class="flex flex-row mb-4">
          <div class="basis-1/3 transition ease-in">
            <p>
              <span class="text-blue-600 font-black">_</span>name:
            </p>
          </div>
          <div class="basis-2/3">
            <p>{{$informationData->name}}</p>
          </div>
        </div>
        <div class="flex flex-row mb-4">
          <div class="basis-1/3">
            <p>
              <span class="text-blue-600 font-black">_</span>birthday:
            </p>
          </div>
          <div class="basis-2/3">
            <p>{{$informationData->birthdate}}</p>
          </div>
        </div>
        <div class="flex flex-row mb-4">
          <div class="basis-1/3">
            <p>
              <span class="text-blue-600 font-black">_</span>country:
            </p>
          </div>
          <div class="basis-2/3">
            <p>{{$informationData->country}}</p>
          </div>
        </div>
        <div class="flex flex-row mb-4">
          <div class="basis-1/3">
            <p>
              <span class="text-blue-600 font-black">_</span>city:
            </p>
          </div>
          <div class="basis-2/3">
            <p>{{$informationData->city}}</p>
          </div>
        </div>
        <div class="flex flex-row mb-4">
          <div class="basis-1/3">
            <p>
              <span class="text-blue-600 font-black">_</span>languages:
            </p>
          </div>
          <div class="basis-2/3">
            <p>{{$informationData->language}}</p>
          </div>
        </div>
        <div class="flex flex-row mb-4">
          <div class="basis-1/3">
            <p>
              <span class="text-blue-600 font-black">_</span>experience:
            </p>
          </div>
          <div class="basis-2/3">
            <p>{{$informationData->experience}}</p>
          </div>
        </div>
        <div class="flex flex-row mb-4">
          <div class="basis-1/3">
            <p>
              <span class="text-blue-600 font-black">_</span>status:
            </p>
          </div>
          <div class="basis-2/3">
            <p>{{$informationData->status}}</p>
          </div>
        </div>
      </div>
    </div>

    <!-- contact section -->
    <div class="mb-12">
      <h2 class="text-xl sm:text-2xl md:text-3xl mb-6 text-gray-400">
        Contact
      </h2>
      <div class="text-base mb-4 text-gray-200">
        If you have any questions or proposals for cooperation, write or call.
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
        <div class="py-4 pl-4 rounded-xl bg-slate-900 group">
          <div class="flex items-center cursor-default">
            <div class="w-8">
              <img class="group-hover:-rotate-12 transition ease-in-out duration-100" src="./public/icons8-gmail-96.png" />
            </div>
            <div class="ml-4">
              <a href="" class="text-slate-500 text-sm tracking-wide font-semibold group-hover:text-slate-400 transition ease-in-out duration-100">
                {{$informationData->email}}
              </a>
            </div>
          </div>
        </div>
        <div class="py-4 pl-4 rounded-xl bg-slate-900 group">
          <div class="flex items-center cursor-default">
            <div class="w-8">
              <img class="group-hover:-rotate-12 transition ease-in-out duration-100" src="./public/icons8-callback-96.png" />
            </div>
            <div class="ml-4">
              <a href="" class="text-slate-500 text-sm tracking-wide font-semibold group-hover:text-slate-400 transition ease-in-out duration-100">
                {{$informationData->mobile}}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- experience section -->
    <div class="mb-12">
      <h2 class="text-xl sm:text-2xl md:text-3xl mb-6 text-gray-400">
        Experience
      </h2>
      <div class="text-base mb-4 text-gray-200">
        Below is a description of my professional experience along with individual tasks and a breakdown by years.
      </div>
      <ul class="list-inside lg:list-outside list-disc text-gray-200">
        @foreach ( $experienceData as $experience)

        <li class="mb-10">
            <div class="text-lg font-medium mb-3 text-gray-300">
                {{$experience->year}}  <br class="block sm:hidden" /> <span class="text-blue-600 pl-4 sm:pl-0">>></span> {{$experience->companyName}}
            </div>
            <div>
              <p>{{$experience->description}}</p>
            </div>
            <div class="mt-4">
              <p>Major tasks && projects:</p>
            </div>
            <div class="ml-8 mt-4">
              <ul class="list-disc">
                <li>
                  Description 1
                </li>
                <li>
                  Description 2
                </li>
                <li>
                  Description 3
                </li>
              </ul>
            </div>
          </li>
        @endforeach


      </ul>
    </div>

    <!-- technologies and tools section -->
    <div class="mb-12">
      <h2 class="text-xl sm:text-2xl md:text-3xl mb-6 text-gray-400">
        Technologies and Tools
      </h2>
      <div class="text-base mb-4 text-gray-200">
        Technologies and tools that I use in my projects.
      </div>
      <div class="flex flex-wrap">

        <!-- choose technologies you know or add your own -->
        @foreach ($toolData as $tool)


        <div class="flex py-1 sm:py-1.5 px-2 sm:px-3 md:px-4 mr-2 mb-2 bg-slate-900 rounded-xl items-center group duration-150">
          <img src="{{$tool->toolImageUrl}}" class="w-10 h-10 sm:w-12 sm:h-12 p-1 group-hover:-rotate-[20deg] transition-all ease-in-out duration-150" />
          <span class="ml-2 sm:ml-3 md:ml-4 text-gray-200 text-sm tracking-wide font-bold cursor-default">
            {{$tool->toolName}}
          </span>
        </div>
        @endforeach
      </div>
    </div>

    <!-- projects section -->
    <div class="mb-12">
      <h2 class="text-xl sm:text-2xl md:text-3xl mb-6 text-gray-400">
        Projects
      </h2>
      <div class="text-base mb-4 text-gray-200">
        Some of my most important projects.
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-2">

        <div class="bg-slate-900 rounded-xl">
          <div class="bg-[url('../src/public/amazing-background.webp')] bg-no-repeat bg-cover bg-center rounded-tl-xl rounded-tr-xl relative">
            <div class="aspect-video bg-gradient-to-b from-transparent to-black">
              <div class="absolute bottom-0 left-0">
                <h3 class="text-xl font-bold text-gray-200 m-2 group-hover:invisible">
                  Project Name 1
                </h3>
              </div>
            </div>
          </div>
          <div class="m-2">
            <div class="mb-4">
              <p class="text-gray-400 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
            <div class="flex flex-row">
              <div class="basis-1/2 flex">
                <a href="" target="_blank" class="bg-gray-800 w-full flex items-center justify-center text-center py-3 rounded-lg mr-1 hover:bg-gray-700 transition ease-in-out duration-100">
                  <img src="./public/icons8-website-96.png" width="26" />
                  <span class="text-sm font-normal text-gray-200 tracking-wide ml-3">
                    live
                  </span>
                </a>
              </div>
              <div class="basis-1/2 flex">
                <a href="" target="_blank" class="bg-gray-800 w-full flex items-center justify-center text-center py-3 rounded-lg ml-1 hover:bg-gray-700 transition ease-in-out duration-100">
                  <img src="./public/icons8-compare-git-96.png" width="26" />
                  <span class="text-sm font-normal text-gray-200 tracking-wide ml-3">
                    github
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-slate-900 rounded-xl">
          <div class="bg-[url('../src/public/amazing-background.webp')] bg-no-repeat bg-cover bg-center rounded-tl-xl rounded-tr-xl relative">
            <div class="aspect-video bg-gradient-to-b from-transparent to-black">
              <div class="absolute bottom-0 left-0">
                <h3 class="text-xl font-bold text-gray-200 m-2 group-hover:invisible">
                  Project Name 2
                </h3>
              </div>
            </div>
          </div>
          <div class="m-2">
            <div class="mb-4">
              <p class="text-gray-200 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
            <div class="flex flex-row">
              <div class="basis-1/2 flex">
                <a href="" target="_blank" class="bg-gray-800 w-full flex items-center justify-center text-center py-3 rounded-lg mr-1 hover:bg-gray-700 transition ease-in-out duration-100 group">
                  <!-- hover animation only for test -->
                  <img class="group-hover:-rotate-12 transition-all ease-in-out duration-100" src="./public/icons8-website-96.png" width="26" />
                  <span class="text-sm font-normal text-gray-200 tracking-wide ml-3 group-hover:ml-6 transition-all ease-in-out duration-100">
                    live
                  </span>
                </a>
              </div>
              <div class="basis-1/2 flex">
                <a href="" target="_blank" class="bg-gray-800 w-full flex items-center justify-center text-center py-3 rounded-lg ml-1 hover:bg-gray-700 transition ease-in-out duration-100">
                  <img src="./public/icons8-compare-git-96.png" width="26" />
                  <span class="text-sm font-normal text-gray-200 tracking-wide ml-3">
                    github
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-slate-900 rounded-xl">
          <div class="bg-[url('../src/public/amazing-background.webp')] bg-no-repeat bg-cover bg-center rounded-tl-xl rounded-tr-xl relative">
            <div class="aspect-video bg-gradient-to-b from-transparent to-black">
              <div class="absolute bottom-0 left-0">
                <h3 class="text-xl font-bold text-gray-200 m-2 group-hover:invisible">
                  Project Name 3
                </h3>
              </div>
            </div>
          </div>
          <div class="m-2">
            <div class="mb-4">
              <p class="text-gray-200 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
            <div class="flex flex-row">
              <div class="basis-1/2 flex">
                <a href="" target="_blank" class="bg-gray-800 w-full flex items-center justify-center text-center py-3 rounded-lg mr-1 hover:bg-gray-700 transition ease-in-out duration-100">
                  <img src="./public/icons8-website-96.png" width="26" />
                  <span class="text-sm font-normal text-gray-200 tracking-wide ml-3">
                    live
                  </span>
                </a>
              </div>
              <div class="basis-1/2 flex">
                <a href="" target="_blank" class="bg-gray-800 w-full flex items-center justify-center text-center py-3 rounded-lg ml-1 hover:bg-gray-700 transition ease-in-out duration-100">
                  <img src="./public/icons8-compare-git-96.png" width="26" />
                  <span class="text-sm font-normal text-gray-200 tracking-wide ml-3">
                    github
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- other links section -->
    <div class="mb-12">
      <h2 class="text-xl sm:text-2xl md:text-3xl mb-6 text-gray-400">
        Links
      </h2>
      <div class="text-base mb-4 text-gray-200">
        Check out my other sites and sources.
      </div>
      <div>

        <!-- link 1 -->
        <a href="" target="" class="flex items-center w-full rounded-xl p-1.5 mb-2 bg-slate-900 group hover:bg-slate-800 transition-shadow duration-200">
          <div class="flex w-full text-center">
            <div class="w-10 h-10 sm:w-12 sm:h-12 items-center flex">
              <img src="./public/thumb-1.webp" class="p-0.5 group-hover:-rotate-[20deg] transition-all ease-in-out duration-150" />
            </div>
            <h2 class="flex justify-center items-center font-bold w-full text-sm text-gray-200 -ml-10 group-hover:tracking-widest ease-in-out duration-150">
              Example website - 1
            </h2>
          </div>
        </a>

        <!-- link 2 -->
        <a href="" target="" class="flex items-center w-full rounded-xl p-1.5 mb-2 bg-slate-900 group hover:bg-slate-800 transition-shadow duration-200">
          <div class="flex w-full text-center">
            <div class="w-10 h-10 sm:w-12 sm:h-12 items-center flex">
              <img src="./public/thumb-2.webp" class="p-0.5 group-hover:-rotate-[20deg] transition-all ease-in-out duration-150" />
            </div>
            <h2 class="flex justify-center items-center font-bold w-full text-sm text-gray-200 -ml-10 group-hover:tracking-widest ease-in-out duration-150">
              Example website - 2
            </h2>
          </div>
        </a>

        <!-- link 3 -->
        <a href="" target="" class="flex items-center w-full rounded-xl p-1.5 mb-2 bg-slate-900 group hover:bg-slate-800 transition-shadow duration-200">
          <div class="flex w-full text-center">
            <div class="w-10 h-10 sm:w-12 sm:h-12 items-center flex">
              <img src="./public/thumb-3.webp" class="p-0.5 group-hover:-rotate-[20deg] transition-all ease-in-out duration-150" />
            </div>
            <h2 class="flex justify-center items-center font-bold w-full text-sm text-gray-200 -ml-10 group-hover:tracking-widest ease-in-out duration-150">
              Example website - 3
            </h2>
          </div>
        </a>

        <!-- link 4 -->
        <a href="" target="" class="flex items-center w-full rounded-xl p-1.5 mb-2 bg-slate-900 group hover:bg-slate-800 transition-shadow duration-200">
          <div class="flex w-full text-center">
            <div class="w-10 h-10 sm:w-12 sm:h-12 items-center flex">
              <img src="./public/thumb-4.webp" class="p-0.5 group-hover:-rotate-[20deg] transition-all ease-in-out duration-150" />
            </div>
            <h2 class="flex justify-center items-center font-bold w-full text-sm text-gray-200 -ml-10 group-hover:tracking-widest ease-in-out duration-150">
              Example website - 4
            </h2>
          </div>
        </a>

        <!-- and so on -->
      </div>
    </div>

    <!-- hobbys section -->
    <div class="mb-12">
      <h2 class="text-xl sm:text-2xl md:text-3xl mb-6 text-gray-400">
        Hobbys
      </h2>
      <div class="text-base mb-4 text-gray-200">
        My hobbies and interests.
      </div>
      <div class="text-base text-slate-400 font-medium cursor-default">
        <span class="underline decoration-2 decoration-lime-400">Sport</span>,
        <span class="underline decoration-2 decoration-amber-400">Mountain biking</span>,
        <span class="underline decoration-2 decoration-sky-400">New technologies</span>,
        <span class="underline decoration-2 decoration-red-400">YouTube</span>,
        <span class="underline decoration-2 decoration-green-400">Video recording and processing</span>,
        <span class="underline decoration-2 decoration-purple-400">Photography</span>,
        <span class="underline decoration-2 decoration-red-400">Netflix</span>,
        <span class="underline decoration-2 decoration-blue-400">Food</span>,
        <span class="underline decoration-2 decoration-teal-400">Personal development</span>
        <!-- and so on -->
      </div>
    </div>

    <!-- gallery section -->
    <div class="mb-12">
      <h2 class="text-xl sm:text-2xl md:text-3xl mb-6 text-gray-400">
        Gallery
      </h2>
      <div class="text-base mb-4 text-gray-200">
        Some of my photos.
      </div>
      <div>
        <div class="flex flex-col-reverse sm:flex-row mb-8">
          <div class="flex basis-full sm:basis-1/3 text-gray-200 items-center">
            <p class="text-sm">
              Description of the first photo.
            </p>
          </div>
          <div class="basis-full sm:basis-2/3">
            <img class="rounded-xl" src="./public/gallery-background.webp" />
          </div>
        </div>

        <div class="flex flex-col-reverse sm:flex-row mb-8">
          <div class="flex basis-full sm:basis-1/3 text-gray-200 items-center">
            <p class="text-sm">
              Description of the second photo.
            </p>
          </div>
          <div class="basis-full sm:basis-2/3">
            <img class="rounded-xl" src="./public/gallery-background.webp" />
          </div>
        </div>

        <div class="flex flex-col-reverse sm:flex-row mb-8">
          <div class="flex basis-full sm:basis-1/3 text-gray-200 items-center">
            <p class="text-sm">
              Description of the third photo.
            </p>
          </div>
          <div class="basis-full sm:basis-2/3">
            <img class="rounded-xl" src="./public/gallery-background.webp" />
          </div>
        </div>
      </div>
    </div>

    <!-- social media section -->
    <div class="mb-12">
      <h2 class="text-xl sm:text-2xl md:text-3xl mb-6 text-gray-400">
        Social Media
      </h2>
      <div class="text-base mb-4 text-gray-200">
        Check out my social media.
      </div>
      <div class="grid grid-cols-3 sm:grid-cols-4 gap-2">
        @foreach ($socialData as $social)
        <a href="{{$social->socialUrl}}" target="_blank">
            <div class="rounded-xl text-center bg-slate-900 group">
              <div class="py-4">
                <div class="flex justify-center mb-2 sm:mb-3 md:mb-4">
                  <img class="w-14 sm:w-20 md:w-24 group-hover:scale-105 group-hover:-rotate-12 ease-in duration-100" src="{{$social->socialImageUrl}}" width="96" />
                </div>
                <span class="text-sm text-slate-600 font-bold group-hover:tracking-wider ease-in duration-100">
                    {{$social->socialName}}
                </span>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
    <footer class="my-32">
      <div class="text-center">
        <span class="text-xs text-gray-200">
          designed by Jakub Gania
        </span>
      </div>
    </footer>
  </div>
</body>
</html>
