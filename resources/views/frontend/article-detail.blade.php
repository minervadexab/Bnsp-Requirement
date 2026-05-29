<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $article->title }} | Nexora Digital Agency</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary": "#0051d5",
                        "primary": "#000000",
                        "background": "#f7f9fb",
                        "surface": "#f7f9fb",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f2f4f6",
                        "surface-container-high": "#e6e8ea",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#45464d",
                        "outline-variant": "#c6c6cd",
                        "secondary-container": "#316bf3",
                        "on-secondary-container": "#ffffff"
                    },
                    spacing: {
                        "stack-sm": "12px",
                        "stack-md": "24px",
                        "stack-lg": "48px",
                        "section-padding": "96px",
                        "container-max": "1280px",
                        "margin-desktop": "64px",
                        "gutter": "24px"
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24;
        }

        .article-content h1,
        .article-content h2,
        .article-content h3 {
            font-weight: 700;
            margin-top: 32px;
            margin-bottom: 16px;
            color: #191c1e;
        }

        .article-content h1 {
            font-size: 40px;
            line-height: 48px;
        }

        .article-content h2 {
            font-size: 32px;
            line-height: 40px;
        }

        .article-content h3 {
            font-size: 26px;
            line-height: 34px;
        }

        .article-content p {
            margin-bottom: 24px;
            line-height: 1.9;
            color: #45464d;
            font-size: 18px;
        }

        .article-content img {
            width: 100%;
            border-radius: 18px;
            margin: 32px 0;
        }

        .article-content ul {
            margin: 24px 0;
            padding-left: 24px;
            list-style: disc;
        }

        .article-content li {
            margin-bottom: 12px;
            color: #45464d;
        }

        .article-content blockquote {
            border-left: 4px solid #0051d5;
            padding-left: 20px;
            margin: 32px 0;
            font-style: italic;
            color: #45464d;
        }
    </style>
</head>

<body class="bg-background text-on-surface overflow-x-hidden">

    {{-- NAVIGATION --}}
    @include('layouts.navigation')

    <main class="pt-20">

        {{-- HERO --}}
        <section class="py-section-padding bg-surface-container-lowest border-b border-outline-variant/30">

            <div class="max-w-container-max mx-auto px-margin-desktop">

                <div class="max-w-4xl mx-auto">

                    {{-- CATEGORY --}}
                    <span class="inline-flex items-center bg-secondary-container text-on-secondary-container px-4 py-2 rounded-full text-sm font-semibold uppercase tracking-wider mb-6">
                        {{ $article->category }}
                    </span>

                    {{-- TITLE --}}
                    <h1 class="text-5xl leading-tight font-bold mb-6 text-on-surface">
                        {{ $article->title }}
                    </h1>

                    {{-- META --}}
                    <div class="flex flex-wrap items-center gap-6 text-on-surface-variant">

                        <div class="flex items-center gap-3">

                            <div class="w-12 h-12 rounded-full overflow-hidden bg-surface-container-high">

                                <img
                                    src="https://ui-avatars.com/api/?name=Nexora&background=random"
                                    alt="Author"
                                    class="w-full h-full object-cover"
                                >

                            </div>

                            <div>
                                <p class="font-semibold text-on-surface">
                                    Nexora Team
                                </p>

                                <p class="text-sm text-on-surface-variant">
                                    {{ $article->created_at->format('F d, Y') }}
                                </p>
                            </div>

                        </div>

                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">
                                schedule
                            </span>

                            <span>
                                {{ rand(5,12) }} Min Read
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        {{-- FEATURE IMAGE --}}
        <section class="py-stack-lg bg-background">

            <div class="max-w-container-max mx-auto px-margin-desktop">

                <div class="max-w-5xl mx-auto">

                    @if($article->image)

                    <img
                        src="{{ asset('storage/' . $article->image) }}"
                        alt="{{ $article->title }}"
                        class="w-full rounded-[24px] shadow-2xl object-cover max-h-[650px]"
                    >

                    @else

                    <img
                        src="https://placehold.co/1400x800"
                        alt="{{ $article->title }}"
                        class="w-full rounded-[24px] shadow-2xl object-cover max-h-[650px]"
                    >

                    @endif

                </div>

            </div>

        </section>

        {{-- ARTICLE CONTENT --}}
        <section class="pb-section-padding">

            <div class="max-w-container-max mx-auto px-margin-desktop">

                <div class="max-w-3xl mx-auto">

                    <article class="article-content">

                        {!! $article->content !!}

                    </article>

                    {{-- BACK BUTTON --}}
                    <div class="mt-16 pt-10 border-t border-outline-variant/30">

                        <a
                            href="{{ route('articles') }}"
                            class="inline-flex items-center gap-3 bg-primary text-white px-6 py-3 rounded-xl font-semibold hover:opacity-90 transition-all"
                        >
                            <span class="material-symbols-outlined">
                                arrow_back
                            </span>

                            Back to Articles
                        </a>

                    </div>

                </div>

            </div>

        </section>

        {{-- MORE ARTICLES --}}
        <section class="py-section-padding bg-surface-container-low border-t border-outline-variant/30">

            <div class="max-w-container-max mx-auto px-margin-desktop">

                <div class="flex items-center justify-between mb-10">

                    <div>

                        <h2 class="text-4xl font-bold mb-2">
                            More Articles
                        </h2>

                        <p class="text-on-surface-variant">
                            Continue exploring insights from Nexora.
                        </p>

                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">

                    @foreach($relatedArticles as $item)

                    <article class="bg-surface-container-lowest rounded-2xl border border-outline-variant overflow-hidden group hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">

                        <div class="aspect-video overflow-hidden">

                            @if($item->image)

                            <img
                                src="{{ asset('storage/' . $item->image) }}"
                                alt="{{ $item->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            >

                            @else

                            <img
                                src="https://placehold.co/800x500"
                                alt="{{ $item->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            >

                            @endif

                        </div>

                        <div class="p-6">

                            <span class="text-sm font-bold uppercase text-secondary mb-3 block">
                                {{ $item->category }}
                            </span>

                            <h3 class="text-2xl font-bold mb-3 group-hover:text-secondary transition-colors">
                                {{ $item->title }}
                            </h3>

                            <p class="text-on-surface-variant mb-5 line-clamp-3">
                                {{ \Illuminate\Support\Str::limit(strip_tags($item->content), 100) }}
                            </p>

                            <a
                                href="{{ route('articles.detail', $item->slug) }}"
                                class="inline-flex items-center gap-2 font-semibold text-primary hover:underline"
                            >
                                Read More

                                <span class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </a>

                        </div>

                    </article>

                    @endforeach

                </div>

            </div>

        </section>

    </main>

</body>
</html>
