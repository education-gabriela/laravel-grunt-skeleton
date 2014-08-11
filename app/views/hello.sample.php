<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <link rel="stylesheet" href="/css/base.css">
    <script src="/js/min/scripts_head.min.js" type="text/javascript"></script>
</head>
<body>
<nav class="top-bar" data-topbar>
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">My Site</a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <li class="active"><a href="#">Right Button Active</a></li>
            <li class="has-dropdown">
                <a href="#">Right Button Dropdown</a>
                <ul class="dropdown">
                    <li><a href="#">First link in dropdown</a></li>
                </ul>
            </li>
        </ul>

        <!-- Left Nav Section -->
        <ul class="left">
            <li><a href="#">Left Nav Button</a></li>
        </ul>
    </section>
</nav>
<ul class="breadcrumbs">
    <li><a href="#">Home</a></li>
    <li><a href="#">Features</a></li>
    <li class="unavailable"><a href="#">Gene Splicing</a></li>
    <li class="current"><a href="#">Cloning</a></li>
</ul>
<form>
    <div class="row">
        <div class="large-12 columns">
            <label>Input Label
                <input type="text" placeholder="large-12.columns"/>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="large-4 columns">
            <label>Input Label
                <input type="text" placeholder="large-4.columns"/>
            </label>
        </div>
        <div class="large-4 columns">
            <label>Input Label
                <input type="text" placeholder="large-4.columns"/>
            </label>
        </div>
        <div class="large-4 columns">
            <div class="row collapse">
                <label>Input Label</label>

                <div class="small-9 columns">
                    <input type="text" placeholder="small-9.columns"/>
                </div>
                <div class="small-3 columns">
                    <span class="postfix">.com</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <label>Select Box
                <select>
                    <option value="husker">Husker</option>
                    <option value="starbuck">Starbuck</option>
                    <option value="hotdog">Hot Dog</option>
                    <option value="apollo">Apollo</option>
                </select>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="large-6 columns">
            <label>Choose Your Favorite</label>
            <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
            <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
        </div>
        <div class="large-6 columns">
            <label>Check these out</label>
            <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
            <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <label>Textarea Label
                <textarea placeholder="small-12.columns"></textarea>
            </label>
        </div>
    </div>
</form>

<script src="/js/min/scripts_footer.min.js" type="text/javascript"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>