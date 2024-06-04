<aside class="sm:h-full md:hidden sm:w-16 w-full h-12 bg-gray-800 text-gray-200">
    <ul class="text-center flex flex-row sm:flex-col w-full">
        <li class="h-14 border-b border-gray-900 hidden sm:block">
            <a id="page-icon" href="/" class="h-full w-full hover:bg-gray-700 block p-3">
                <img class="object-contain h-full w-full" src="https://avatars1.githubusercontent.com/u/6157842?v=4"
                    alt="open-source" />
            </a>
        </li>
        <!-- <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit"><img width="95px" src="{{asset('asset/others/SIGN OUT BUTTON.png')}}"
                            class="md:p-4 py-3 px-0 block"></button>
                </form> -->
        <li class="sm:border-b border-gray-900 flex-1 sm:w-full" title="Inbox">
            <a id="page-icon" href="{{route('dashboard')}}" class="h-full w-full hover:bg-gray-700 block p-3">
                <i class="fas fa-inbox fill-current"> </i>
            </a>
        </li>
        <li class="sm:border-b border-gray-900 flex-1 sm:w-full" title="Settings">
            <a id="page-icon" href="/" class="h-full w-full hover:bg-gray-700 block p-3">
                <i class="fas fa-cogs fill-current"> </i>
            </a>
        </li>
        <li class="sm:border-b border-gray-900 flex-1 sm:w-full" title="Users">
            <a id="page-icon" href="/" class="h-full  w-full hover:bg-gray-700 block p-3">
                <i class="fas fa-users fill-current"> </i>
            </a>
        </li>
    </ul>
</aside>