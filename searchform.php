<form
    class="search-form"
    role="search"
    method="get"
    id="searchform"
    action="<?php echo home_url('/') ?>"
>
    <input
        class="search-form__input"
        type="text"
        value="<?php echo get_search_query() ?>"
        name="s" id="s"
        placeholder="Введите название товара ..."
        autocomplete="off"
    />
    <input type="submit" id="searchsubmit">
    <ul class="ajax-search"></ul>
</form>