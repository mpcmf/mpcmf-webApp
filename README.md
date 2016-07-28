# mpcmf-webApp

mpcmf web application skeleton.

Use it to build new projects with based on mpcmf.

Ultra-fast web-server included! :)

Installation
---
install base application structure
```
composer.phar create-project mpcmf/mpcmf-webApp .
```

then install tested requirements
```
composer.phar install
```

Usage
---
Console commands usage
```
bin/mpcmf apps/defaultApp/console.php
```

Web server starts as single console command
```
# Single process server
bin/mpcmf apps/defaultApp/console.php webServer:run --bind 0.0.0.0 --ports 8082

# Multi processes/ports server for usage with balancer (e.g. haProxy, nginx)
bin/mpcmf apps/defaultApp/console.php webServer:run --bind 127.0.0.1 --ports 8082,8083,8084,8085

# Multi processes/ports server with included balancer (8080 - master port)
bin/mpcmf apps/defaultApp/console.php webServer:run --bind 127.0.0.1 --ports 8082,8083,8084,8085 -m 0.0.0.0:8080
```

Do not forget to clean up cache after some updates! By default in `/tmp/mpcmf`

Creating apps
---
Create new app in the `apps` directory.
Default structure:
```
apps                          # directory with all project applications
└── defaultApp
    ├── commands              # directory for console commands
    │   ├── test              # your custom console sub-namespace
    │   │   └── something.php # custom command
    │   └── webServer         # webServer console command sub-namespace
    │       └── run.php       # webServer command
    ├── console.php           # console application with all application commands
    ├── defaultApp.php        # base application class
    ├── libraries             # directory for custom libraries
    ├── modules               # directory for application modules
    │   └── defaultModule     # single module
    │       ├── module.php    # base module class
    │       ├── routes.php    # some non-entity routes such as homepage
    │       ├── actions       # module actions, routes, acl settings related to entities
    │       ├── controllers   # mvc controllers
    │       ├── entities      # just meta-objects
    │       ├── mappers       # data mappers for storage, forms and relations
    │       ├── models        # mvc models
    │       ├── public        # some static files (do not accessible via http)
    │       └── templates     # mvc templates (module)
    └── templates             # another templates (application)
```

How fast is included author?
For example: info api `/MODULE/ENTITY/api.getInfo`  1.9ms

![Image](https://habrastorage.org/files/1c6/c4e/2c7/1c6c4e2c7b2745fc89b0d885683a56c9.png)

Contact
---
Change environment options in `environment.local.php` file.

Please create issues for some bugs.
