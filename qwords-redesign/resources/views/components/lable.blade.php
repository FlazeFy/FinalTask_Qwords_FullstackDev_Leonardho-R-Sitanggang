<style>
    .title_holder {
        padding: var(--spaceLG);
        text-align: center;
    }
    .title_text {
        font-weight: 600;
        font-size: var(--textXJumbo);
        color: var(--primaryColor);
    }
    .desc_text {
        font-weight: 500;
        font-size: var(--textXLG);
        color: var(--blackColor);
    }
</style>

@if($type == "main_title")
    <div class="title_holder">
        <h1 class="title_text">{{$title}}</h1>
        <h6 class="desc_text">{{$desc}}</h6>
    </div>
@endif