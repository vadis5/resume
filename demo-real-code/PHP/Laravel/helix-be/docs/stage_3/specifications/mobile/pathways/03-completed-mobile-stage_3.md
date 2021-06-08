# Specification. Pathways. Completed. Mobile API server. Stage 3

## Objectives

Pathway, sequence, module may be completed. Back End (BE) must store info about completed items.

## Flow Model

+ Mob app creates a request about completing
+ Mob app requests a list of completed items.

### Data Structure

We use one-to-many polymorphic relation.

+ Pathways
    + ...
    
+ Sequences
    + ...
    
+ Modules
    + ...

+ Completed
    + id
    + completable_id      (ID in Pathways or Sequences or Modules)
    + completable_type    (Pathways or Sequences or Modules)
    
### Seeding
    + 1 pathway
    + 2 sequences
    + 3 modules

## Methods

+ Domain for all methods is Mobile
+ Permissions for all methods: tenant-user

|                    Goal                   |          Controller         |    Method    |  Status |
|:-----------------------------------------:|:---------------------------:|:------------:|:-------:|
| Get a number of user's completed pathways | CompletedPathwaysController | count        | to-do   |
| Get all user's completed pathways         | CompletedPathwaysController | index        | to-do   |
| Complete pathway                          | PathwaysController          | complete     | to-do   |
| Get user's completed sequences            | SequencesController         | getCompleted | planned |
| Get user's completed modules              | ModulesController           | getCompleted | planned |
| Complete sequence                         | SequencesController         | complete     | planned |
| Complete module                           | ModulesController           | complete     | planned |

### Tests

|  Method  |          Controller         | Permissions | Code | Testing Role |
|:--------:|:---------------------------:|:-----------:|:----:|:------------:|
| count    | CompletedPathwaysController | tenant-user |  200 | tenant-user  |
|          |                             |             |  204 | tenant-user  |
|          |                             |             |  403 | tenant-admin |
|          |                             |             |  401 | guest        |
| index    | CompletedPathwaysController | tenant-user |  200 | tenant-user  |
|          |                             |             |  204 | tenant-user  |
|          |                             |             |  403 | tenant-admin |
|          |                             |             |  401 | guest        |
| complete | CompletedPathwaysController | tenant-user |  200 | tenant-user  |
|          |                             |             |  404 | tenant-user  |
|          |                             |             |  403 | tenant-admin |
|          |                             |             |  401 | guest        |

