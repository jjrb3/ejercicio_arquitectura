# Ejercicio arquitectura

Eligiendo una de las estrategias descritas anteriormente (Clean, Capas, Hexagonal, DDD) elaborar el landing page
 de una pagina que debe mostrar reseñas de películas.

``
Jeremy Reyes, 
Guillermo Romo y
Maria Camila Guerrero
``
## Arquitectura seleccionada 

**Arquitectura Hexagonal**
![Referencia Arquitectura](https://miro.medium.com/max/1718/1*yR4C1B-YfMh5zqpbHzTyag.png)

Se escogió esta arquitectura ya que propone que la lógica sea independiente totalmente de la interfaz de usuario, de la base de datos o servicios externos , y de esta manera es más tolerante al cambio. Hace nuestra aplicación mantenible y aplica principios SOLID en la codificación.

Es inherente al framework utilizado, sin embargo a a la hora de hacer el ejercicio, se hizo una paralelo con las herramientas que ofrece Laravel :

- Controllers *Adaptadores* 

    MoviesAdapter
    
- UseCases *Aplicación*

    GetMoviesUseCase
    
    GetMoviesUseCaseInterface _Puerto_
    
- Services *Dominio*

    Movie (Modelo)
    
    EloquenMovieRepository (Repositorio)
    
    EloquentMovieRepositoryInterface _Puerto_

