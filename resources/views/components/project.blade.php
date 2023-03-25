<div class="project">
    <img src="{{ $pathToImage }}" alt="{{ __('translated.image') }} {{ $name }}">
    <a href="{{ route('project.details', ['projectNr' =>  $projectNr ]) }}">{{ $name }}</a>
    <p>{{ $summary }}</p>

</div>
