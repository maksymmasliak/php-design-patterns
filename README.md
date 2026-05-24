# PHP Design Patterns

A personal catalog of OOP design patterns written in pure PHP 8.
No frameworks, no libraries — just clean architecture.

Built to understand *why* code is structured the way it is,
not just *how* to make it work.

---

## Patterns

### Factory
`src/Factory/`

A static factory that creates different camera objects (Tapo, Hikvision)
based on a type string. The client never calls `new` directly —
it just asks the factory for a camera and gets back a `CameraInterface`.

Adding a new camera type = one new class + one line in the factory.
Nothing else changes.

### Singleton
`src/Singleton/`

A database connection that can only exist once.
Calling `getInstance()` twice returns the same object in memory.
Cloning and deserialization are explicitly blocked.

### Repository
`src/Repository/`

A `MemoryCameraRepository` that stores cameras in an array
and implements `CameraRepositoryInterface`.
The client works with the interface — it has no idea
whether data comes from memory, MySQL or an API.

### Service Layer
`src/Service/`

A `CameraService` that receives a repository via constructor injection
and generates a report for a given camera ID.
If the camera doesn't exist — it throws an `\Exception`.
The client catches it.

This is dependency injection in its simplest form.

---

## Key takeaways

- Interfaces decouple code from concrete implementations
- A factory removes `new` from client code
- A repository hides where data comes from
- A service holds business logic, nothing else
- Constructor injection makes dependencies explicit and testable

---

## Stack

- PHP 8.1
- Composer + PSR-4 autoloading
- No frameworks