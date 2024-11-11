<?php
namespace DCryption;

class Cryption
{
    private $alphabet = [
        'A' => 'gjtw', 'B' => 'iola', 'C' => 'qz5e', 'D' => 't0e2', 'E' => '2p9o',
        'F' => '5aq2', 'G' => 'b4nj', 'H' => '3pwq', 'I' => 'A0qd', 'J' => 'dmik',
        'K' => 'a18w', 'L' => 'v8s7', 'M' => 'bm6o', 'N' => '1z0c', 'O' => 'f5ba',
        'P' => 'oxwy', 'Q' => 'fwua', 'R' => 'kdb7', 'S' => 'c1vq', 'T' => 'mu7',
        'U' => '2v3p', 'V' => 'd6Ig', 'W' => 'o0ia', 'X' => 'y9et', 'Y' => 'lzI6',
        'Z' => 'R2oa', 'a' => '5T1w', 'b' => 'Ks8a', 'c' => '0UqA', 'd' => 'H2yz',
        'e' => '8fqG', 'f' => 'eT7a', 'g' => 'm4Mq', 'h' => 'Y6Qw', 'i' => 'o5Eq',
        'j' => 'Gve4', 'k' => 'Mr2q', 'l' => 'I0vb', 'm' => 'e2vU', 'n' => 'bVs9',
        'o' => 'kP5A', 'p' => 'vHsJ', 'q' => 'mK9Q', 'r' => 'YaV8', 's' => 'Q7Uv',
        't' => 'Ys3W', 'u' => 'nJ7t', 'v' => 'CpX0', 'w' => 'Z60a', 'x' => 'Sa6a',
        'y' => '8LqU', 'z' => 'kG5a', '0' => 'Tu9A', '1' => 'Oi4a', '2' => 'hW9A',
        '3' => 'Qh3a', '4' => 'T2va', '5' => 'Njs0', '6' => '8aTx', '7' => 'zy7a',
        '8' => 'DiE9', '9' => 'Io6l', '.' => 'X4uV', ',' => 'Rt7o', '!' => 'n0sW',
        '?' => 'Qv2p', '@' => 'W9f7', '#' => 'Jl6b', '$' => 'B2yH', '%' => 'U7oi',
        '^' => 'Lz8q', '&' => 'G5tQ', '*' => '3K7p', '(' => 'Nq4e', ')' => 'Rj8v',
        '-' => 'D6sq', '_' => 'Fi9w', '+' => 'M2cO', '=' => 'Tz7a', ':' => 'W5dH',
        ';' => 'Po3m', '\'' => 'iH0v', '"' => 'qT2y', '`' => 'r7Gw', '~' => 'lQ4p',
        '/' => 'yV9o', '\\' => 'x3Sq', '|' => 'vH7d', '<' => 'f9Pe', '>' => 'kL2o',
        '[' => 'bW6q', ']' => 'o7Vp', '{' => 'nC4w', '}' => 's9Fa', ' ' => 'vt6Q',
    ];

    public function encrypt($plaintext)
    {
        $encrypted = '';
        $length = strlen($plaintext);
    
        for ($i = 0; $i < $length; $i++) {
            $char = $plaintext[$i];
    
            if (mb_check_encoding($char, 'UTF-8') && preg_match('/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{1F700}-\x{1F77F}\x{1F780}-\x{1F7FF}\x{1F800}-\x{1F8FF}\x{1F900}-\x{1F9FF}\x{1FA00}-\x{1FA6F}\x{1FA70}-\x{1FAFF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}\x{2300}-\x{23FF}\x{2B50}\x{203C}\x{2049}\x{00A9}\x{00AE}]/u', $char)) {
                throw new \Exception('Emoji or unsupported character detected: ' . $char);
            }
    
            $encrypted .= $this->alphabet[$char] ?? $char;
        }
    
        return $encrypted;
    }
    

    public function decrypt($encryptedText)
    {
        $decrypted = '';
        $length = strlen($encryptedText);
    
        for ($i = 0; $i < $length; $i += 4) {
            $segment = substr($encryptedText, $i, 4);
    
            $decryptedChar = array_search($segment, $this->alphabet);
            if (!$decryptedChar) {
                throw new \Exception('Invalid encrypted segment detected: ' . $segment);
            }
            $decrypted .= $decryptedChar;
        }
    
        return $decrypted;
    }
    
}
