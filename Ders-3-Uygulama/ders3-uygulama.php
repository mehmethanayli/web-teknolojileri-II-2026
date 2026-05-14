<?php
session_start();

$min = 1;
$max = 100;
$target = null;

// Yeni oyun / sayiyi sifirla
if (!isset($_SESSION['target']) || isset($_GET['reset'])) {
  $_SESSION['target'] = random_int($min, $max);
}
$target = $_SESSION['target'];

$message = '';
$guess = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $raw = $_POST['tahmin'] ?? '';

  if ($raw === '') {
    $message = "Lutfen bir sayi girin.";
  } else {
    $guess = (int)$raw;

    if ($guess < $min || $guess > $max) {
      $message = "Lutfen $min ile $max arasinda bir sayi girin.";
    } else {
      $diff = abs($guess - $target);

      if ($guess === $target) {
        $message = "Tebrikler! Sayiyi buldunuz: " . $target;
      } else {
        // Yakiklik esigi (diff <= 5 ise yakin kabul)
        $yakinsin = ($diff <= 5);
        $message = $yakinsin ? "Yakin!" : "Uzak!";
        $message .= ($guess < $target) ? " (Daha buyuk deneyin.)" : " (Daha kucuk deneyin.)";
      }
    }
  }
}
?>

<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <title>Sayi Tahmin Oyunu</title>
</head>
<body>
  <h2>Sayi Tahmin Oyunu</h2>
  <p>1 ile <?php echo $max; ?> arasinda bir sayi dusunuluyor.</p>

  <?php if ($message !== ''): ?>
    <p><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
  <?php endif; ?>

  <form method="post">
    <label for="tahmin">Bir sayi girin:</label>
    <input
      id="tahmin"
      type="number"
      name="tahmin"
      required
      min="<?php echo $min; ?>"
      max="<?php echo $max; ?>"
    >
    <button type="submit">Tahmin Et</button>
  </form>

  <form method="get">
    <button type="submit" name="reset" value="1">Yeni Sayi Uret</button>
  </form>
</body>
</html>