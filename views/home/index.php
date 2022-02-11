<main>
    <section class="sec-Welcome">
        <div class="container">
        <h1>Welcome</h1>
        <p>consectetur adipiscing elit. Vestibulum pellentesque malesuada augue non convallis.</p>
        <div class="categories">
            <?php foreach ($data["categories"] as $value) { ?>
                <div class="item">
                    <a href=""><?=$value["title"]?></a>
                </div>
            <?php }?>
        </div>
        </div>    
    </section>
    <section class="sec-boxes">
    <div class="container">
        <div class="box">
            <span>insert pic here.</span>
            <div class="text-box">
                <h2>News 1</h2>
                <p>consectetur adipiscing elit. Vestibulum pellentesque malesuada augue non convallis.</p>
                <button class="btn">View</button>
            </div>
        </div>
        <div class="box">
            <span>insert pic here.</span>
            <div class="text-box">
                <h2>News 1</h2>
                <p>consectetur adipiscing elit. Vestibulum pellentesque malesuada augue non convallis.</p>
                <button class="btn">View</button>
            </div>
        </div>
        <div class="box">
            <span>insert pic here.</span>
            <div class="text-box">
                <h2>News 1</h2>
                <p>consectetur adipiscing elit. Vestibulum pellentesque malesuada augue non convallis.</p>
                <button class="btn">View</button>
            </div>
        </div>
    </div>
    </section>
</main>