# ToYaml Drone plugin

## Introduction

Use this plugin when you want to populate a yaml file from a Drone step

## Usage

```yaml
pipeline:
  prepare-config:
    image: phpdrone/to-yaml-file
    file: build.yaml
    yaml:
      mysql:
        host: mysql
        user: my_user
        password: password
      site:
        base_url: http://web:8080
      features:
        - feature1
        - feature2
```

## Output

```
[prepare-config:L0:0s] 142 bytes written to build.yaml
```

## Limitation

Due to the way settings are passed to plugins, the order is not guaranteed.

Eg: in the example provided, feature will be first in the file :

```yaml
features:
    - feature1
    - feature2
mysql:
    host: mysql
    password: password
    user: my_user
site:
    base_url: 'http://web:8080'
```


