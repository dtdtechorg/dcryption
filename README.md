
# DCryption Library

DCryption — bu PHP kutubxonasi bo'lib, matnni shifrlash va dechifrlashni amalga oshirish uchun ishlatiladi. Kutubxona o'ziga xos shifrlash alifbosi bilan ishlaydi va matnlarni shifrlab, maxfiy ma'lumotlarni himoya qiladi.

## O'rnatish

### Composer orqali o'rnatish

DCryption kutubxonasini o'rnatish uchun Composer ishlatishingiz mumkin. Avvalo, quyidagi buyruqni terminalda bajarib, kutubxonani o'rnating:

```bash
composer require dtdtechorg/dcryption
```

Agar Composer orqali o'rnatish imkoni bo'lmasa, kutubxonani [GitHub](https://github.com/dtdtechorg/dcryption) orqali yuklab olib, `src/` papkasi ichiga joylashtirishingiz mumkin.

### Qo'lda o'rnatish

1. GitHub sahifasiga kirib, kutubxonani yuklab oling.
2. `src/` papkasini o'z loyihangizga qo'shing.
3. Kutubxonaning fayllarini o'z loyihangizda ishlatish uchun kerakli joyda ulanishni amalga oshiring.

## Foydalanish

### Kutubxona Sinfi

DCryption kutubxonasidan foydalanish uchun avvalo, `Cryption` sinfini chaqirish kerak.

#### 1. Composer orqali ishlatish

Agar kutubxonani Composer orqali o'rnatgan bo'lsangiz, quyidagi kodni ishlatishingiz mumkin:

```php
<?php
require 'vendor/autoload.php'; // Composer orqali o'rnatilgan fayllarni chaqirish

use DCryption\Cryption;

// Cryption sinfini yaratish
$cipher = new Cryption();

// Shifrlash
$plaintext = "Salom, dunyo!";
$encrypted = $cipher->encrypt($plaintext);
echo "Shifrlangan matn: " . $encrypted . "
";

// Shifrlangan matnni qayta ochish
$decrypted = $cipher->decrypt($encrypted);
echo "Dechifrlangan matn: " . $decrypted . "
";
?>
```

#### 2. Qo'lda o'rnatish

Agar Composer ishlatmoqchi bo'lmasangiz va kutubxonani qo'lda yuklagan bo'lsangiz, `Cryption.php` faylini quyidagicha chaqiring:

```php
<?php
require_once 'src/Cryption.php'; // Faylni o'zingizning loyihangizga mos ravishda yo'lni ko'rsating

use DCryption\Cryption;

// Cryption sinfini yaratish
$cipher = new Cryption();

// Shifrlash
$plaintext = "Salom, dunyo!";
$encrypted = $cipher->encrypt($plaintext);
echo "Shifrlangan matn: " . $encrypted . "
";

// Shifrlangan matnni qayta ochish
$decrypted = $cipher->decrypt($encrypted);
echo "Dechifrlangan matn: " . $decrypted . "
";
?>
```

## Funksiyalar

### `encrypt($plaintext)`

Bu metod kiritilgan matnni (plaintext) shifrlaydi va shifrlangan matnni qaytaradi.

#### Parametrlar:
- `$plaintext` — shifrlash uchun matn (string).

#### Natija:
- Shifrlangan matn (string).

**Misol**:

```php
$encrypted = $cipher->encrypt("Salom, dunyo!");
echo $encrypted;  // Shifrlangan matn
```

### `decrypt($encryptedText)`

Bu metod shifrlangan matnni (encrypted text) ochadi va asl matnni qaytaradi.

#### Parametrlar:
- `$encryptedText` — shifrlangan matn (string).

#### Natija:
- Dechifrlangan matn (string).

**Misol**:

```php
$decrypted = $cipher->decrypt($encrypted);
echo $decrypted;  // Asl matn: Salom, dunyo!
```

## Xatoliklar va Maxfiy Belgilar

- Agar noto'g'ri belgi yoki xatolik yuzaga kelsa, kutubxona `?` belgisi bilan natijalarni qaytaradi.
- Agar kiritilgan matnda belgilar bo'lsa, ularni shifrlashda `array_search` orqali topish mumkin bo'lmasa, natijada `?` belgilari qaytariladi.

## License

MIT License — bu loyiha MIT litsenziyasiga asoslangan. Batafsil ma'lumot uchun LICENSE faylini tekshiring.

## Qo'shimcha

Agar siz kutubxonaning imkoniyatlarini kengaytirmoqchi bo'lsangiz yoki yangi xususiyatlar qo'shmoqchi bo'lsangiz, iltimos, [GitHub](https://github.com/dtdtechorg/dcryption) sahifasida muhokama qilishingiz mumkin.

---

**DCryption Library** — maxfiy ma'lumotlarni shifrlash va xavfsizligini ta'minlash uchun ishlab chiqilgan PHP kutubxonasi.
