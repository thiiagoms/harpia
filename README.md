<p align="center">
  <a href="https://github.com/thiiagoms/harpia">
    <img src="assets/harpia.png" alt="Logo" width="80" height="80">
  </a>
     <h3 align="center">Harpia - See all ports are open or closed on host! :hearts:</h3>
</p>

Harpia is an educational tool to scan hosts and catch ports are open or closed!<br>
Harpia **MUST** be use **ONLY** for **EDUCATIONAL** purposes!! I'm not responsability for what do you do with this tool.

- [Dependencies](#Dependencies)
- [Usage](#Usage)

### Dependencies
* PHP 7.4+ (Only)

### Usage

- Harpia is very easy to use: 
```bash
$ ./harpia <host-url> [optional: --ports <ports-file>]
```
* Example with default ports: 
```bash
$ ./harpia google.com
```

* With custom ports file
```
$ ./harpia google.com --ports ports.txt
```

If you want to contribute, you can also open issue or clone this repository to make a Pull Request, thank you so much for choose Harpia :hearts: