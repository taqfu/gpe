<?php
    include ('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name='keywords' content='obama, greatest president ever, greatest president'>
<meta name='description' content='A page dedicated to the greatest president ever!'>
<meta name='author' content='taqfu'>

<link rel='icon' href='<?php echo URL; ?>favicon.ico'>
<link rel='stylesheet' href='<?php echo URL; ?>css.css'>
<base href='https://en.wikipedia.org/wiki/' >
<title>GREATEST PRESIDENT EVER</title>
<style>
    .center{
        text-align:center;
    }
</style>
</head>

<body>
<nav>
    <span style='font-weight:bold;'>
    Home
    </span>
    <a href='<?php echo URL; ?>ranks.php'>
    Alternative Rankings
    </a>
    <a href='<?php echo URL; ?>presidents.php'>
    Alternative Presidents
    </a>
    <a href='<?php echo URL; ?>descriptions.php'>
    Alternative Descriptions
    </a>
</nav>
<noscript>
    Your browser does not support Javascript. Sorry!
</noscript>
<main>
<article>
<header style='text-align:center;'>
<!-- 
    The following is from http://www.fascinatedwithsoftware.com/blog/post/2012/11/03/How-to-Draw-an-American-Flag-with-HTML5.aspx -->
<canvas id="flag" width="570" height="300" style="border:1px solid grey" >
    Your browser does not support HTML5.
</canvas>
<script>
    drawAmericanFlag("flag",0,0,300);

    // Draw an American Flag
    // canvasId - The id of the HTML canvas on which to draw the flag.
    // x        - The x coordinate of the flag's upper left corner, on the canvas.
    // y        - The y coordinate of the flag's upper left corner, on the canvas.
    // height   - The height of the flag. (Its width will be computed based
    //            on the standard dimensions of an American flag.)
    function drawAmericanFlag(canvasId, x, y, height) {
        var ctx = document.getElementById(canvasId).getContext("2d");

        // From the height, derive other measurements.
        var width = height * 1.9;
        var xStarSeparation = height * 0.063;
        var yStarSeparation = height * 0.054;

        // Make sure we start with a white base. That's the default for a 
        // canvas, but maybe someone else has already drawn on it.
        ctx.fillStyle = "white";
        ctx.fillRect(0, 0, width, height);

        // Color the red stripes.
        for (var ixStripe = 0; ixStripe < 13; ixStripe += 2) {
            ctx.fillStyle = "#C40043";
            ctx.fillRect(0, ixStripe * height / 13, width, height / 13);
        }

        // Draw the blue field.
        ctx.fillStyle = "#002654";
        ctx.fillRect(0, 0, 0.76 * height, height * 7 / 13);

        // Draw the stars.
        var outerRadius = 0.0616 * height / 2;
        var innerRadius = outerRadius * Math.sin(Math.PI / 10) / Math.sin(7 * Math.PI / 10);
        ctx.fillStyle = "white";
        for (var row = 1; row <= 9; ++row) {
            for (var col = 1; col <= 11; ++col) {
                if ((row + col) % 2 == 0) {
                    drawStar(ctx, xStarSeparation * col, yStarSeparation * row, 5, outerRadius, innerRadius);
                    ctx.fill();
                }
            }
        }
    }

    // Draw a star. This function just does does the lineTo's. It is up to the caller
    // to set the fillStyle and/or strokeStyle on the context, and call fill() or stroke()
    // after this function returns.
    // context     - The HTML5 canvas' context, obtained with getContext("2d").
    // xCenter     - The x coordinate of the center of the star, in the context.
    // yCenter     - The y coordinate of the center of the star, in the context.
    // nPoints     - The number of points the start should have.
    // outerRadius - The radius of a circle that would tightly fit the star's outer vertexes.
    // innerRadius - The radius of a circle that would tightly fit the star's inner vertexes.
    function drawStar(context, xCenter, yCenter, nPoints, outerRadius, innerRadius) {
        context.beginPath();
        for (var ixVertex = 0; ixVertex <= 2 * nPoints; ++ixVertex) {
            var angle = ixVertex * Math.PI / nPoints - Math.PI / 2;
            var radius = ixVertex % 2 == 0 ? outerRadius : innerRadius;
            context.lineTo(xCenter + radius * Math.cos(angle), yCenter + radius * Math.sin(angle));
        }
    }
</script>
<h1 style='text-align:center;margin:0px;'> 
    The Greatest President Ever 
</h1>
<iframe src="https://www.whitehouse.gov/">White House Website</iframe>
<address>
The White House<br>
1600 Pennsylvania Avenue NW<br>
Washington, DC 20500
</address>
<figure>
    <img src='<?php echo URL; ?>obama.jpg' alt='First Couple' usemap='#TheObamas'>
    <map name='TheObamas'>
        <area shape='rect' coords='0,0,200,350' href='Michelle_Obama' alt='First Lady'>
        <area shape='rect' coords='250,0,500,350' href='Barack_Obama' alt='Best President'>
    </map>
    <figcaption><mark><sub>GREATEST</sub> </small>PRESIDENT</small> <sup>EVER</sup></mark></figcaption>
</figure>
<video controls>
    <source src='<?php echo URL; ?>obama.mp4' type='video/mp4'>
    Your browser does not support HTML video.
</video>
<script>
var firefox = navigator.userAgent.search("Firefox")<0;
if (firefox){
    console.log("NOT FIREFOX");
    document.write("<dialog open>OBAMA IS THE GREATEST PRESIDENT EVER! <!-- only really works in Chrome and Opera --></dialog>");
} else {
    console.log("FIREFOX");
}
</script>
<section>
<p><q>
    Issues are never simple. One thing I'm proud of is that very rarely will you hear me simplify the issues.
</q></p>

<p>
<q>
    What Washington needs is adult supervision.
</q>
</p>
</section>
    <audio controls >
        <source src='https://upload.wikimedia.org/wikipedia/commons/7/7c/Four_ruffles_and_flourishes%2C_hail_to_the_chief_%28long_version%29.ogg' type='audio/ogg'>
        Why don't you have a browser that can play audio files, bro?
    </audio>
</header>
<hr>
<section>
<p>
    The US Presidency was created <s>and defined</s> in the <cite>The Constitution</cite>.

<p>
On <time datetime='2009-11-04 20:00'>Election Day</time>, <u>Obama</u> became the new president of the <abbr title='United States Of America'>USA</abbr> and is scheduled to leave <span title='They should never leave!'>at the end of 2016.</span>
</p>
<p> 
    <dfn>Barrack Obama</dfn> (or if you reverse it: <bdo dir='rtl'>barracK obamA</bdo>) is the 44th president of the United States, the first black president, and <em>the greatest president that has ever existed</em>.
</p>

<aside>
    <b>Donald Trump</b> and <strong>Hillary Clinton</strong> are both contenders for the next presidential position.
</aside>

    <blockquote href='http://taqfu.com'>
    <p>
        Barrack Obama is the greatest president of our generation. He is our generation's JFK and I am extremely grateful he lived out the duration of his presidency.
    </p>
    <p>
        -taqfu
    </p>
    </blockquote>

Now some people will say that <u>Obama</u> was the worst president that ever existed. Here are the facts to dispute that:
<dl>
    <dt>Barrack Obama</dt>
    <dd><mark><sub>GREATEST</sub> <small>PRESIDENT</small> <sup>EVER</sup></mark></dd>
    <dt>44</dt>
    <dd>Best number for a president ever!</dd>
</dl>
    <table style='text-align:center;background-color:black;'>
        <caption>
            Obama's Record Of AWESOME
        </caption>
        <colgroup>
            <col style='background-color:red;'>
            <col style='background-color:white;'>
            <col style='background-color:blue;'>
        </colgroup>
        <thead>
        <tr><th>
            Year
        </td><th>
            Unemployment
        </td><th>
            Military Casualties
        </td></tr>
        </thead>
        <tbody>
        <tr><td>
            2009
        </td><td>
            9%
        </td><td>
            466
        </td></tr>
        <tr><td>
            2010
        </td><td>
            10%
        </td><td>
            559
        </td></tr>
        <tr><td>
            2011
        </td><td>
            9%
        </td><td>
            472
        </td></tr>
        <tr><td>
            2012
        </td><td>
            8%
        </td><td>
            311
        </td></tr>
        <tr><td>
            2013
        </td><td>
            7%
        </td><td>
            127
        </td></tr>
        <tr><td>
            2014
        </td><td>
            6%
        </td><td>
            58
        </td></tr>
        <tr><td>
            2015
        </td><td>
            5%
        </td><td>
            28
        </td></tr>
        </tbody>
        <tfoot>
            <tr><td>
                <sub>GREATEST</sub>
            </td><td>
                <small>PRESIDENT</small>
            </td><td>
                <sup>EVER</sup>
            </td></tr>
        </tfoot>
    </table>
<del><i>
    <p>
        Unfortunately, as great as President <u>Obama</u> is, there are some things that have left a black mark on his record. 
    </p><p>
        <u>Obama</u> has deported more people than any other president. <a href="http://fusion.net/story/252637/obama-has-deported-more-immigrants-than-any-other-president-now-hes-running-up-the-score/">Link</a>
    </p><p>
        <u>Obama</u> has killed civilians in drone strikes. <a href="http://www.theatlantic.com/politics/archive/2016/03/the-obama-administrations-drone-strike-dissembling/473541/">Link</a>
    </p>
</i></del>
<ins>
    In spite of this, <u>Obama</u> is still the <mark><sub>GREATEST</sub> <small>PRESIDENT</small> <sup>EVER</sup></mark>!
</ins>

</section>
</article>
</body>
<footer>
<div class='center'>
        <form method="POST" action='<?php echo URL; ?>submit_alt_presidents_and_rank.php'>
            <fieldset>
                <legend>Alternative</legend>
                <p>
                    <label for='presidents'>
                        You're wrong! The <mark><sub>GREATEST</sub> <small>PRESIDENT</small> <sup>EVER</sup></mark> is 
                    </label>
                    <select id='president' name='president'>
                        <!--<option value='Barak Hussein Obama, II'>Barak Hussein Obama, II</option>-->
                        <optgroup label='White Presidents'>
                            <option value='Abraham Lincoln'>Abraham Lincoln</option>
                            <option value='Andrew Jackson'>Andrew Jackson</option>
                            <option value='Andrew Johnson'>Andrew Johnson</option>
                            <option value='Benjamin Harrison'>Benjamin Harrison</option>
                            <option value='Calvin Coolidge'>Calvin Coolidge</option>
                            <option value='Chester Alan Arthur'>Chester Alan Arthur</option>
                            <option value='Dwight David Eisenhower'>Dwight David Eisenhower</option>
                            <option value='Franklin Delano Roosevelt'>Franklin Delano Roosevelt</option>
                            <option value='Franklin Pierce'>Franklin Pierce</option>
                            <option value='George Herbert Walker Bush'>George Herbert Walker Bush</option>
                            <option value='George Walker Bush'>George Walker Bush</option>
                            <option value='George Washington'>George Washington</option>
                            <option value='Gerald Rudolph Ford, Jr.'>Gerald Rudolph Ford, Jr.</option>
                            <option value='Grover Cleveland'>Grover Cleveland</option>
                            <option value='Harry S. Truman'>Harry S. Truman</option>
                            <option value='Herbert Clark Hoover'>Herbert Clark Hoover</option>
                            <option value='James Abram Garfield'>James Abram Garfield</option>
                            <option value='James Buchanan'>James Buchanan</option>
                            <option value='James Earl Carter, Jr.'>James Earl Carter, Jr.</option>
                            <option value='James Knox Polk'>James Knox Polk</option>
                            <option value='James Madison'>James Madison</option>
                            <option value='James Monroe'>James Monroe</option>
                            <option value='John Adams'>John Adams</option>
                            <option value='John Fitzgerald Kennedy'>John Fitzgerald Kennedy</option>
                            <option value='John Quincy Adams'>John Quincy Adams</option>
                            <option value='John Tyler'>John Tyler</option>
                            <option value='Lyndon Baines Johnson'>Lyndon Baines Johnson</option>
                            <option value='Martin Van Buren'>Martin Van Buren</option>
                            <option value='Millard Fillmore'>Millard Fillmore</option>
                            <option value='Richard Milhous Nixon'>Richard Milhous Nixon</option>
                            <option value='Ronald Wilson Reagan'>Ronald Wilson Reagan</option>
                            <option value='Rutherford Bichard Hayes'>Rutherford Bichard Hayes</option>
                            <option value='Theodore Roosevelt'>Theodore Roosevelt</option>
                            <option value='Thomas Jefferson'>Thomas Jefferson</option>
                            <option value='Ulysses Simpson Grant'>Ulysses Simpson Grant</option>
                            <option value='Warren Gamaliel Harding'>Warren Gamaliel Harding</option>
                            <option value='William Henry Harrison'>William Henry Harrison</option>
                            <option value='William Howard Taft'>William Howard Taft</option>
                            <option value='William Jefferson Clinton'>William Jefferson Clinton</option>
                            <option value='William McKinley'>William McKinley</option>
                            <option value='Woodrow Wilson'>Woodrow Wilson</option>
                            <option value='Zachary Taylor'>Zachary Taylor</option>
                        </optgroup>
                    </select>
                </p><p>
                    <label for='rank'>
                        <u>Obama</u> is #
                    </label>
                    <select name='rank'>
                    <script>
                        var page_str;
                        for (rank=2;rank<45;rank++){
                           page_str = page_str + "<option value='" + rank + "'>" + rank + "</option>";
                        }
                        document.write(page_str);
                    </script>
                    </select>
                </p>
                
                <input type='submit'>
            
                <p>
                    <a href="<?php echo URL; ?>presidents.php">President Results</a>
                    <a href="<?php echo URL; ?>ranks.php">Ranking Results</a>
                </p>
            </fieldset>
        </form>
        <a name='allTheForms'></a>
        <form method='POST' action='<?php echo URL; ?>descriptions.php'>
        
     
        <u>Obama</u> is: <input type='text' name='description' maxlength='255' list='descriptions'><input type='submit' />
        <datalist id='descriptions'>
            <option value='awesome'>
            <option value='greatest president ever'>
            <option value='black JFK'>
            <option value="our generation's JFK">
            <option value='the best'>
        </datalist>
        </form>
        <form id='yesForm' method="POST" action='<?php echo URL; ?>love.php'>
            <input type='hidden' name='love' value="true" />
        </form>
        <form id='noForm' method="POST" action='<?php echo URL; ?>love.php'>
            <input type='hidden' name='love' value="false" />
        </form>
        <button type='button' id='yesToObama' onclick="document.getElementById('yesForm').submit();">
            I love Obama!
        </button>
        <button type='button' id='noToObama' onclick="document.getElementById('noForm').submit();">
            I do not love Obama!
        </button>
        <div>
        Love Meter
        </div>
<?php
    $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,  DB_USER, DB_PWD);
    $statement = $db->query('select sum(tally) from love');
    $total = $statement->fetchColumn();
    
    $statement = $db->query('select tally from love where love=true');
    $num_of_love = $statement->fetchColumn();
    echo "<meter value='$num_of_love' min='0' max='$total'>$num_of_love of $total</meter>";
?>
</div>
</footer>
</main>
    <code>
            fetchGreatestPresidentEver();
            <var>$greatest_president_ever</var> = "Barrack Obama";
    </code>

    <details>
        <p>
        <summary>About</summary>
        </p>
        <p style='font-style:italic;'>
            This page was made so the author, <a href='http://taqfu.com' rel='author'>taqfu<a/>, could have experience with HTML. This page is made with every HTML tag available. Try not to take this too seriously please. Unless you're President <u>Obama</u>, then I'd really like to meet you. Thanks!
        </p>
        <!--
        Implement results page from descriptions as ul and results from presidents and rank as ol. Implement SAMP for ul format.
        Implement meter for results of love / do not love Obama
        Implement video for how awesome Obama is.
        Create American flag in canvas.
        link  - http://stackoverflow.com/questions/2082362/what-does-link-tag-do-besides-including-stylesheets
        -->
        <kbd><pre>
        Implement generic East Asian profession of love in ruby, rt, rp. (FAIL)
        Not sure how to use: embed, bdi, keygen, menu, menuitem, object, output, param, progress, track, wbr
        </pre></kbd>
    </details>
</html>
