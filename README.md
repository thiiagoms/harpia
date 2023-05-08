<p align="center">
  <a href="https://github.com/thiiagoms/harpia">
    <img src="assets/harpia.png" alt="Logo" width="80" height="80">
  </a>
     <h3 align="center">Harpia - See all ports are open or closed on host! :hearts:</h3>
</p>

Simple port scan made with elephants :elephants:

- [Dependencies](#Dependencies)
- [Usage](#Usage)

### Dependencies
* PHP 8.1+
* Composer or Docker


### Install Dependencies

- With Composer:

```bash
$ git clone https://github.com/thiiagoms/harpia
$ cd harpia
$ composer installl
$ chmod +x harpia
```
### Usage :hammer:

### You can use `harpia` in twio ways:: 

* First: Answer the hostname and scan with default ports
```bash
$ ./harpia

██░ ██  ▄▄▄       ██▀███   ██▓███   ██▓ ▄▄▄      
▓██░██▒▒████▄    ▓██ ▒ ██▒▓██░  ██▒ ▓██▒████▄    
██▀▀██░▒██  ▀█▄  ▓██ ░▄█ ▒▓██░ ██▓▒▒██▒▒██  ▀█▄  
▓█ ░██ ░██▄▄▄▄██ ▒██▀▀█▄  ▒██▄█▓▒ ▒░██░░██▄▄▄▄██ 
▓█▒░██▓ ▓█   ▓██▒░██▓ ▒██▒▒██▒ ░  ░░██░ ▓█   ▓██▒
▒ ░░▒░▒ ▒▒   ▓▒█░░ ▒▓ ░▒▓░▒▓▒░ ░  ░░▓   ▒▒   ▓▒█░
▒ ░▒░ ░  ▒   ▒▒ ░  ░▒ ░ ▒░░▒ ░      ▒ ░  ▒   ▒▒ ░
░  ░░ ░  ░   ▒     ░░   ░ ░░        ▒ ░  ░   ▒   
░  ░  ░      ░  ░   ░               ░        ░  ░

[*] Harpia - Port Scan made with Love and Elephants
[*] Author: Thiago Silva AKA thiiagoms
[*] Version: 1.0

> Website address: 
```

* Second: With custom ports in your `file.txt` or another file that you choosed
```bash
$ ./harpia -p <path-to-your-file.txt>

██░ ██  ▄▄▄       ██▀███   ██▓███   ██▓ ▄▄▄      
▓██░██▒▒████▄    ▓██ ▒ ██▒▓██░  ██▒ ▓██▒████▄    
██▀▀██░▒██  ▀█▄  ▓██ ░▄█ ▒▓██░ ██▓▒▒██▒▒██  ▀█▄  
▓█ ░██ ░██▄▄▄▄██ ▒██▀▀█▄  ▒██▄█▓▒ ▒░██░░██▄▄▄▄██ 
▓█▒░██▓ ▓█   ▓██▒░██▓ ▒██▒▒██▒ ░  ░░██░ ▓█   ▓██▒
▒ ░░▒░▒ ▒▒   ▓▒█░░ ▒▓ ░▒▓░▒▓▒░ ░  ░░▓   ▒▒   ▓▒█░
▒ ░▒░ ░  ▒   ▒▒ ░  ░▒ ░ ▒░░▒ ░      ▒ ░  ▒   ▒▒ ░
░  ░░ ░  ░   ▒     ░░   ░ ░░        ▒ ░  ░   ▒   
░  ░  ░      ░  ░   ░               ░        ░  ░

[*] Harpia - Port Scan made with Love and Elephants
[*] Author: Thiago Silva AKA thiiagoms
[*] Version: 1.0

> Website address: 
```

## Run lints and tests:

Lint: 

```bash
$ composer phpcs src
$ ./vendor/bin/phpinsights
```

Tests:
```bash
$ composer phpunit
```

If you want to contribute, you can also open issue or clone this repository to make a Pull Request, thank you so much for choose Harpia :hearts:
