<div class="w-1/2 md:w-1/3 lg:w-1/5">
    <a target="_blank" title="{{ $company->name  }}" href="{{ $company->url  }}" class="">
        <img class="rounded-lg w-24 md:w-32" src="{{ $company->getImage() }}" alt="{{ $company->name  }}">
    </a>
</div>
