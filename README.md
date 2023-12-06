## Test task
### Test Task Overview
#### Objective:
Upgrade an existing application from Vue 2 to Vue 3.
Migrate the markup from Twig templates to Vue 3 components.
#### Timeframe:
1 hour.
### Task Setup
#### Project Background
* Project allows to display and create list of products
* Backend PHP + Symfony 5.4. Contains usual controllers rendering Twig templates and API controllers. No authorization. Frontend is fixed between logic in Twig and Vue 2 components.
* **Controllers**
    * **ProductListController** - renders Twig list template
    * **ProductCreateController** - controller processing requests from Twig form
    * **ProductApiController** - API endpoints for retrieving list of products / product by IDs
* **Templates**
    * **base.html.twig** - base twig template
    * **list.html.twig** - twig template containing product creation logic + including Vue components.
* **Frontend**
    * **main.js** - Vue page entrypoint
    * **store/store.js** - Vuex store
    * **components/ProductTable.vue** - Vue component for table rendering
#### Environment Setup
This is a sample project, "blind" development required :)  
#### Test Task Details
* Implement all @TODOs within the project
    * Upgrade to Vue 3 from Vue 2
    * Use composition API
    * Add Vue translations library
    * Migrate from Vuex to Pinia
    * Migrate Twig create form to Vue Components
    * Provide requirements for the backend API for products creation
* Comment the frontend parts
    * Comments in code explaining major changes
    * Brief comments on challenges faced and solutions adopted
* Code quality
* All features work as expected after migration
#### Submission Guidelines
Git / Bitbucket repository
