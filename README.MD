# Missing `doctrine/annotations` Dependency After Version 3.29.1

## Issue
Starting from version **3.30.0**, the `doctrine/annotations` dependency was removed from `require` in `composer.json`. This causes issues for projects that rely on it but did not explicitly include it in their own dependencies.

## Bug
If project doesn't have a `doctrine/annotations` dependency then jms/serializer started from 3.30.0 will not work.

## Affected Versions
- ✅ **Works:** `3.29.1`
- ❌ **Breaks:** `>=3.30.0`

## How to Reproduce
1. remove composer.conflict
2. make build
3. make run, you also can specify php version via PHP_VERSION env (PHP_VERSION=7.4 make run)

## How to fix
1. Explicitly require doctrine/annotations in jms/serializer composer.json
