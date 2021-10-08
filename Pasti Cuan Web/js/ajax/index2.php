<?php
    // require '../functions.php';
    $conn = mysqli_connect("localhost", "root", "", "pasticuan");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    $keyword = $_GET["keyword"];

    $query = "SELECT * FROM stocks WHERE StockName LIKE '%$keyword$'";

    $stocks = query($query);
?>

<?php foreach($stocks as $row) : ?> 
    <div class="stock">
        <div class="stock-detail">
            <div class="stock-name-container">
                <p class="stock-name"><?= $row["StockName"] ?></p>
            </div>
            <div class="stock-price-container">
                <p class="stock-price"><?php echo getStockPrice($row["StockName"]); ?></p>
            </div>
            <div class="stock-percentage-container">
                <p class="stock-price"><?php echo getStockPercentage($row["StockName"]); ?></p>
            </div>
        </div>
        <div class="decision">
            <button id="buy-button" class="stock-list-button">BUY</button>
            <button id="sell-button" class="stock-list-button">SELL</button>
        </div>
    </div>                
<?php endforeach; ?>