# Goals

APIs for managing Goals

## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/goals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/goals"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "List of Goals.",
 "data": {
   {
     "id": 6,
     "user_id": 4,
     "pathway_id": null,
     "parent_id": null,
     "goal_title": "First Goal",
     "order": null,
     "completed_by": "2021-02-18 08:36:00",
     "status": "inProgress",
     "howLongWillThisTake": 3,
     "howLongWillThisTakeType": "days",
     "created_at": "2021-02-10T08:36:00.000000Z",
     "updated_at": "2021-02-10T08:36:00.000000Z",
     "tasks": [
       {
         "id": 7,
         "user_id": 4,
         "pathway_id": null,
         "parent_id": 6,
         "goal_title": "First Task",
         "order": 1,
         "completed_by": "2021-02-12 08:36:00",
         "status": "inProgress",
         "howLongWillThisTake": 1,
         "howLongWillThisTakeType": "days",
         "created_at": "2021-02-10T08:36:00.000000Z",
         "updated_at": "2021-02-10T08:36:00.000000Z"
       }
     ]
   }
 }
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-goals" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-goals"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-goals"></code></pre>
</div>
<div id="execution-error-GETapi-v1-goals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-goals"></code></pre>
</div>
<form id="form-GETapi-v1-goals" data-method="GET" data-path="api/v1/goals" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-goals', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-goals" onclick="tryItOut('GETapi-v1-goals');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-goals" onclick="cancelTryOut('GETapi-v1-goals');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-goals" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/goals</code></b>
</p>
<p>
<label id="auth-GETapi-v1-goals" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-goals" data-component="header"></label>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/goals/qui?id=14" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/goals/qui"
);

let params = {
    "id": "14",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got Specific Goal.",
 "data": {
   {
     "id": 6,
     "user_id": 4,
     "pathway_id": null,
     "parent_id": null,
     "goal_title": "First Goal",
     "order": null,
     "completed_by": "2021-02-18 08:36:00",
     "status": "inProgress",
     "howLongWillThisTake": 3,
     "howLongWillThisTakeType": "days",
     "created_at": "2021-02-10T08:36:00.000000Z",
     "updated_at": "2021-02-10T08:36:00.000000Z",
     "tasks": [
       {
         "id": 7,
         "user_id": 4,
         "pathway_id": null,
         "parent_id": 6,
         "goal_title": "First Task",
         "order": 1,
         "completed_by": "2021-02-12 08:36:00",
         "status": "inProgress",
         "howLongWillThisTake": 1,
         "howLongWillThisTakeType": "days",
         "created_at": "2021-02-10T08:36:00.000000Z",
         "updated_at": "2021-02-10T08:36:00.000000Z"
       }
     ]
   }
  }
}

 @response   404 {
 "success": false,
 "code": 404,
 "message": "Not found",
 "data": null
 }
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-goals--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-goals--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-goals--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-goals--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-goals--id-"></code></pre>
</div>
<form id="form-GETapi-v1-goals--id-" data-method="GET" data-path="api/v1/goals/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-goals--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-goals--id-" onclick="tryItOut('GETapi-v1-goals--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-goals--id-" onclick="cancelTryOut('GETapi-v1-goals--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-goals--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/goals/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-goals--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-goals--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-goals--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-goals--id-" data-component="query"  hidden>
<br>
Goal ID</p>
</form>


## Store a newly created course

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/goals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":10,"pathway_id":19,"parent_id":4,"goal_title":"ut","order":5,"completed_by":"et","status":"completed","howLongWillThisTake":18,"howLongWillThisTakeType":"hours","goal":{"user_id":11,"pathway_id":9,"parent_id":13,"goal_title":"et","order":14,"completed_by":"ipsam","status":"voluptatem","howLongWillThisTake":11,"howLongWillThisTakeType":"quis"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/goals"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 10,
    "pathway_id": 19,
    "parent_id": 4,
    "goal_title": "ut",
    "order": 5,
    "completed_by": "et",
    "status": "completed",
    "howLongWillThisTake": 18,
    "howLongWillThisTakeType": "hours",
    "goal": {
        "user_id": 11,
        "pathway_id": 9,
        "parent_id": 13,
        "goal_title": "et",
        "order": 14,
        "completed_by": "ipsam",
        "status": "voluptatem",
        "howLongWillThisTake": 11,
        "howLongWillThisTakeType": "quis"
    }
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Created new Goal.",
    "data": [
        {
            "id": 7,
            "user_id": 4,
            "pathway_id": null,
            "parent_id": 6,
            "goal_title": "First Task",
            "order": 1,
            "completed_by": "2021-02-12 08:36:00",
            "status": "inProgress",
            "howLongWillThisTake": 1,
            "howLongWillThisTakeType": "days",
            "created_at": "2021-02-10T08:36:00.000000Z",
            "updated_at": "2021-02-10T08:36:00.000000Z"
        }
    ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "user_id":["The user_id field is required."],
  "pathway_id":["The pathway_id field is required."],
  "parent_id":["The parent_id field is required."],
  "goal_title":["The goal_title field is required."],
  "order":["The order field is required."],
  "completed_by":["The completed_by field is required."],
  "status":["The status field must be a bool."],
  "howLongWillThisTake":["The howLongWillThisTake field must be a bool."],
  "howLongWillThisTakeType":["The howLongWillThisTakeType field must be an array."],
 }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-v1-goals" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-goals"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-goals"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-goals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-goals"></code></pre>
</div>
<form id="form-POSTapi-v1-goals" data-method="POST" data-path="api/v1/goals" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-goals', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-goals" onclick="tryItOut('POSTapi-v1-goals');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-goals" onclick="cancelTryOut('POSTapi-v1-goals');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-goals" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/goals</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-goals" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-goals" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-v1-goals" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>pathway_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="pathway_id" data-endpoint="POSTapi-v1-goals" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="parent_id" data-endpoint="POSTapi-v1-goals" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>goal_title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="goal_title" data-endpoint="POSTapi-v1-goals" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="order" data-endpoint="POSTapi-v1-goals" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>completed_by</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="completed_by" data-endpoint="POSTapi-v1-goals" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="status" data-endpoint="POSTapi-v1-goals" data-component="body" required  hidden>
<br>
The value must be one of <code>completed</code>, <code>inProgress</code>, or <code>notStarted</code>.</p>
<p>
<b><code>howLongWillThisTake</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="howLongWillThisTake" data-endpoint="POSTapi-v1-goals" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>howLongWillThisTakeType</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="howLongWillThisTakeType" data-endpoint="POSTapi-v1-goals" data-component="body"  hidden>
<br>
The value must be one of <code>days</code>, <code>hours</code>, or <code>minutes</code>.</p>
<p>
<details>
<summary>
<b><code>goal</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The goal object</summary>
<br>
<p>
<b><code>goal.user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="goal.user_id" data-endpoint="POSTapi-v1-goals" data-component="body" required  hidden>
<br>
The user_id parameter of the goal. Should exist in the table Users</p>
<p>
<b><code>goal.pathway_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="goal.pathway_id" data-endpoint="POSTapi-v1-goals" data-component="body"  hidden>
<br>
nullable required The patway_id parameter of the goal</p>
<p>
<b><code>goal.parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="goal.parent_id" data-endpoint="POSTapi-v1-goals" data-component="body"  hidden>
<br>
nullable required The parent_id parameter of the goal. Should exist in the table Users</p>
<p>
<b><code>goal.goal_title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="goal.goal_title" data-endpoint="POSTapi-v1-goals" data-component="body" required  hidden>
<br>
The goal_title parameter of the goal</p>
<p>
<b><code>goal.order</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="goal.order" data-endpoint="POSTapi-v1-goals" data-component="body"  hidden>
<br>
nullable required The order parameter of the goal</p>
<p>
<b><code>goal.completed_by</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="goal.completed_by" data-endpoint="POSTapi-v1-goals" data-component="body" required  hidden>
<br>
The completed_by parameter of the goal</p>
<p>
<b><code>goal.status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="goal.status" data-endpoint="POSTapi-v1-goals" data-component="body" required  hidden>
<br>
The status parameter of the goal (completed,inProgress,notStarted)</p>
<p>
<b><code>goal.howLongWillThisTake</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="goal.howLongWillThisTake" data-endpoint="POSTapi-v1-goals" data-component="body"  hidden>
<br>
nullable The howLongWillThisTake parameter of the goal</p>
<p>
<b><code>goal.howLongWillThisTakeType</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="goal.howLongWillThisTakeType" data-endpoint="POSTapi-v1-goals" data-component="body"  hidden>
<br>
nullable The howLongWillThisTakeType parameter of the goal (days,hours,minutes)</p>
</details>
</p>

</form>


## Update the specified course in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/goals/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"pathway_id":14,"goal_title":"vel","order":9,"completed_by":"dicta","status":"inProgress","howLongWillThisTake":7,"howLongWillThisTakeType":"hours","goal":{"pathway_id":4,"goal_title":"iure","order":1,"completed_by":"sit","status":"consequatur","howLongWillThisTake":4,"howLongWillThisTakeType":"modi"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/goals/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "pathway_id": 14,
    "goal_title": "vel",
    "order": 9,
    "completed_by": "dicta",
    "status": "inProgress",
    "howLongWillThisTake": 7,
    "howLongWillThisTakeType": "hours",
    "goal": {
        "pathway_id": 4,
        "goal_title": "iure",
        "order": 1,
        "completed_by": "sit",
        "status": "consequatur",
        "howLongWillThisTake": 4,
        "howLongWillThisTakeType": "modi"
    }
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Updated the Goal.",
    "data": [
        {
            "id": 6,
            "user_id": 4,
            "pathway_id": null,
            "parent_id": null,
            "goal_title": "First Goal",
            "order": null,
            "completed_by": "2021-02-18 08:36:00",
            "status": "inProgress",
            "howLongWillThisTake": 3,
            "howLongWillThisTakeType": "days",
            "created_at": "2021-02-10T08:36:00.000000Z",
            "updated_at": "2021-02-10T08:36:00.000000Z",
            "tasks": [
                {
                    "id": 7,
                    "user_id": 4,
                    "pathway_id": null,
                    "parent_id": 6,
                    "goal_title": "First Task",
                    "order": 1,
                    "completed_by": "2021-02-12 08:36:00",
                    "status": "inProgress",
                    "howLongWillThisTake": 1,
                    "howLongWillThisTakeType": "days",
                    "created_at": "2021-02-10T08:36:00.000000Z",
                    "updated_at": "2021-02-10T08:36:00.000000Z"
                }
            ]
        }
    ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "pathway_id":["The pathway_id field is required."],
  "goal_title":["The goal_title field is required."],
  "order":["The order field is required."],
  "completed_by":["The completed_by field is required."],
  "status":["The status field must be a bool."],
  "howLongWillThisTake":["The howLongWillThisTake field must be a bool."],
  "howLongWillThisTakeType":["The howLongWillThisTakeType field must be an array."],
 }
}

 @response   404 {
 "success": false,
 "code": 404,
 "message": "Not found",
 "data": null
 }
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-v1-goals--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-goals--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-goals--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-goals--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-goals--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-goals--id-" data-method="PUT" data-path="api/v1/goals/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-goals--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-goals--id-" onclick="tryItOut('PUTapi-v1-goals--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-goals--id-" onclick="cancelTryOut('PUTapi-v1-goals--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-goals--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/goals/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-goals--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-goals--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-goals--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pathway_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="pathway_id" data-endpoint="PUTapi-v1-goals--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>goal_title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="goal_title" data-endpoint="PUTapi-v1-goals--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="order" data-endpoint="PUTapi-v1-goals--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>completed_by</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="completed_by" data-endpoint="PUTapi-v1-goals--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="status" data-endpoint="PUTapi-v1-goals--id-" data-component="body"  hidden>
<br>
The value must be one of <code>completed</code>, <code>inProgress</code>, or <code>notStarted</code>.</p>
<p>
<b><code>howLongWillThisTake</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="howLongWillThisTake" data-endpoint="PUTapi-v1-goals--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>howLongWillThisTakeType</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="howLongWillThisTakeType" data-endpoint="PUTapi-v1-goals--id-" data-component="body"  hidden>
<br>
The value must be one of <code>days</code>, <code>hours</code>, or <code>minutes</code>.</p>
<p>
<details>
<summary>
<b><code>goal</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The goal object</summary>
<br>
<p>
<b><code>goal.pathway_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="goal.pathway_id" data-endpoint="PUTapi-v1-goals--id-" data-component="body"  hidden>
<br>
nullable required The patway_id parameter of the goal</p>
<p>
<b><code>goal.goal_title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="goal.goal_title" data-endpoint="PUTapi-v1-goals--id-" data-component="body" required  hidden>
<br>
The goal_title parameter of the goal</p>
<p>
<b><code>goal.order</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="goal.order" data-endpoint="PUTapi-v1-goals--id-" data-component="body"  hidden>
<br>
nullable required The order parameter of the goal</p>
<p>
<b><code>goal.completed_by</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="goal.completed_by" data-endpoint="PUTapi-v1-goals--id-" data-component="body" required  hidden>
<br>
The completed_by parameter of the goal</p>
<p>
<b><code>goal.status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="goal.status" data-endpoint="PUTapi-v1-goals--id-" data-component="body" required  hidden>
<br>
The status parameter of the goal (completed,inProgress,notStarted)</p>
<p>
<b><code>goal.howLongWillThisTake</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="goal.howLongWillThisTake" data-endpoint="PUTapi-v1-goals--id-" data-component="body"  hidden>
<br>
nullable The howLongWillThisTake parameter of the goal</p>
<p>
<b><code>goal.howLongWillThisTakeType</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="goal.howLongWillThisTakeType" data-endpoint="PUTapi-v1-goals--id-" data-component="body"  hidden>
<br>
nullable The howLongWillThisTakeType parameter of the goal (days,hours,minutes)</p>
</details>
</p>

</form>


## Remove the specified goal.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/goals/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/goals/quo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Deleted The Goal.",
 "data": null
}

 @response   404 {
 "success": false,
 "code": 404,
 "message": "Not found",
 "data": null
 }
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-v1-goals--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-goals--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-goals--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-goals--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-goals--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-goals--id-" data-method="DELETE" data-path="api/v1/goals/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-goals--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-goals--id-" onclick="tryItOut('DELETEapi-v1-goals--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-goals--id-" onclick="cancelTryOut('DELETEapi-v1-goals--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-goals--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/goals/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-goals--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-goals--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-goals--id-" data-component="url" required  hidden>
<br>
</p>
</form>



