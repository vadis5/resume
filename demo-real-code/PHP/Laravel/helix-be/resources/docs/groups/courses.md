# Courses

APIs for managing Courses

## Display a listing of the courses of the own department with filters and sorts.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/mobile/v1/pathways" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":11,"tag_id":4,"author":"atque","length":"autem"}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/mobile/v1/pathways"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 11,
    "tag_id": 4,
    "author": "atque",
    "length": "autem"
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
    "message": "Created Course Index",
    "data": [
        {
            "id": 4,
            "name": "Course Theme 1",
            "developer_id": 1,
            "author": "Course Author Name",
            "thumb": "thumb-file-name.jpg",
            "description": "Description text",
            "like": 100,
            "status": "draft",
            "length_unit": "m",
            "length": 20,
            "offline": false,
            "mood_tracker": false,
            "feedback": false,
            "created_at": "2020-11-03 00:00:00",
            "updated_at": "2020-11-03 00:00:00"
        }
    ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "details": [
            "The details field is required."
        ],
        "details.name": [
            "The name field is required."
        ],
        "details.status": [
            "The status field is required."
        ],
        "details.length_unit": [
            "The length_unit field is required."
        ],
        "details.length": [
            "The length field is required."
        ],
        "details.offline": [
            "The offline field is required."
        ],
        "details.mood_tracker": [
            "The mood_tracker field must be a bool."
        ],
        "details.feedback": [
            "The feedback field must be a bool."
        ],
        "tags": [
            "The tags field must be an array."
        ],
        "categories": [
            "The categories field must be an array."
        ]
    }
}
```
> Example response (460):

```json
{
    "success": false,
    "code": 460,
    "message": "Wrong request",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-mobile-v1-pathways" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-mobile-v1-pathways"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-mobile-v1-pathways"></code></pre>
</div>
<div id="execution-error-POSTapi-mobile-v1-pathways" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-mobile-v1-pathways"></code></pre>
</div>
<form id="form-POSTapi-mobile-v1-pathways" data-method="POST" data-path="api/mobile/v1/pathways" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-mobile-v1-pathways', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-mobile-v1-pathways" onclick="tryItOut('POSTapi-mobile-v1-pathways');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-mobile-v1-pathways" onclick="cancelTryOut('POSTapi-mobile-v1-pathways');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-mobile-v1-pathways" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/mobile/v1/pathways</code></b>
</p>
<p>
<label id="auth-POSTapi-mobile-v1-pathways" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-mobile-v1-pathways" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-mobile-v1-pathways" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tag_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tag_id" data-endpoint="POSTapi-mobile-v1-pathways" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>author</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="author" data-endpoint="POSTapi-mobile-v1-pathways" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>length</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="length" data-endpoint="POSTapi-mobile-v1-pathways" data-component="body"  hidden>
<br>
</p>

</form>


## Display a listing of all courses for super admin.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/courses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courses"
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
    "message": "Created Course Index",
    "data": [
        {
            "id": 4,
            "name": "Course Theme 1",
            "developer_id": 1,
            "author": "Course Author Name",
            "thumb": "thumb-file-name.jpg",
            "description": "Description text",
            "like": 100,
            "status": "draft",
            "length_unit": "m",
            "length": 20,
            "offline": false,
            "mood_tracker": false,
            "feedback": false,
            "created_at": "2020-11-03 00:00:00",
            "updated_at": "2020-11-03 00:00:00"
        }
    ]
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
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-courses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-courses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-courses"></code></pre>
</div>
<div id="execution-error-GETapi-v1-courses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-courses"></code></pre>
</div>
<form id="form-GETapi-v1-courses" data-method="GET" data-path="api/v1/courses" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-courses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-courses" onclick="tryItOut('GETapi-v1-courses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-courses" onclick="cancelTryOut('GETapi-v1-courses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-courses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/courses</code></b>
</p>
<p>
<label id="auth-GETapi-v1-courses" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-courses" data-component="header"></label>
</p>
</form>


## Display a listing of courses of the Helix for helix admin.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/courses/helix" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courses/helix"
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
    "message": "Created Course Index",
    "data": [
        {
            "id": 4,
            "name": "Course Theme 1",
            "developer_id": 1,
            "author": "Course Author Name",
            "thumb": "thumb-file-name.jpg",
            "description": "Description text",
            "like": 100,
            "status": "draft",
            "length_unit": "m",
            "length": 20,
            "offline": false,
            "mood_tracker": false,
            "feedback": false,
            "created_at": "2020-11-03 00:00:00",
            "updated_at": "2020-11-03 00:00:00"
        }
    ]
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
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-courses-helix" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-courses-helix"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-courses-helix"></code></pre>
</div>
<div id="execution-error-GETapi-v1-courses-helix" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-courses-helix"></code></pre>
</div>
<form id="form-GETapi-v1-courses-helix" data-method="GET" data-path="api/v1/courses/helix" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-courses-helix', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-courses-helix" onclick="tryItOut('GETapi-v1-courses-helix');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-courses-helix" onclick="cancelTryOut('GETapi-v1-courses-helix');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-courses-helix" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/courses/helix</code></b>
</p>
<p>
<label id="auth-GETapi-v1-courses-helix" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-courses-helix" data-component="header"></label>
</p>
</form>


## Display a listing of the courses of the own tenant for tenant admin.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/courses/tenant" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courses/tenant"
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
    "message": "Created Course Index",
    "data": [
        {
            "id": 4,
            "name": "Course Theme 1",
            "developer_id": 1,
            "author": "Course Author Name",
            "thumb": "thumb-file-name.jpg",
            "description": "Description text",
            "like": 100,
            "status": "draft",
            "length_unit": "m",
            "length": 20,
            "offline": false,
            "mood_tracker": false,
            "feedback": false,
            "created_at": "2020-11-03 00:00:00",
            "updated_at": "2020-11-03 00:00:00"
        }
    ]
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
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-courses-tenant" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-courses-tenant"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-courses-tenant"></code></pre>
</div>
<div id="execution-error-GETapi-v1-courses-tenant" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-courses-tenant"></code></pre>
</div>
<form id="form-GETapi-v1-courses-tenant" data-method="GET" data-path="api/v1/courses/tenant" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-courses-tenant', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-courses-tenant" onclick="tryItOut('GETapi-v1-courses-tenant');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-courses-tenant" onclick="cancelTryOut('GETapi-v1-courses-tenant');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-courses-tenant" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/courses/tenant</code></b>
</p>
<p>
<label id="auth-GETapi-v1-courses-tenant" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-courses-tenant" data-component="header"></label>
</p>
</form>


## Display a listing of the courses of the own tenant&#039;s department.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/courses/department/nemo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courses/department/nemo"
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
    "message": "Created Course Index",
    "data": [
        {
            "id": 4,
            "name": "Course Theme 1",
            "developer_id": 1,
            "author": "Course Author Name",
            "thumb": "thumb-file-name.jpg",
            "description": "Description text",
            "like": 100,
            "status": "draft",
            "length_unit": "m",
            "length": 20,
            "offline": false,
            "mood_tracker": false,
            "feedback": false,
            "created_at": "2020-11-03 00:00:00",
            "updated_at": "2020-11-03 00:00:00"
        }
    ]
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
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-courses-department--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-courses-department--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-courses-department--department_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-courses-department--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-courses-department--department_id-"></code></pre>
</div>
<form id="form-GETapi-v1-courses-department--department_id-" data-method="GET" data-path="api/v1/courses/department/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-courses-department--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-courses-department--department_id-" onclick="tryItOut('GETapi-v1-courses-department--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-courses-department--department_id-" onclick="cancelTryOut('GETapi-v1-courses-department--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-courses-department--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/courses/department/{department_id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-courses-department--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-courses-department--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="GETapi-v1-courses-department--department_id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the courses of the own department with filters and sorts.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/courses/department/aliquam/filtered" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":7,"tag_id":16,"author":"eveniet","length":"quia"}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courses/department/aliquam/filtered"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 7,
    "tag_id": 16,
    "author": "eveniet",
    "length": "quia"
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
    "message": "Created Course Index",
    "data": [
        {
            "id": 4,
            "name": "Course Theme 1",
            "developer_id": 1,
            "author": "Course Author Name",
            "thumb": "thumb-file-name.jpg",
            "description": "Description text",
            "like": 100,
            "status": "draft",
            "length_unit": "m",
            "length": 20,
            "offline": false,
            "mood_tracker": false,
            "feedback": false,
            "created_at": "2020-11-03 00:00:00",
            "updated_at": "2020-11-03 00:00:00"
        }
    ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "details": [
            "The details field is required."
        ],
        "details.name": [
            "The name field is required."
        ],
        "details.status": [
            "The status field is required."
        ],
        "details.length_unit": [
            "The length_unit field is required."
        ],
        "details.length": [
            "The length field is required."
        ],
        "details.offline": [
            "The offline field is required."
        ],
        "details.mood_tracker": [
            "The mood_tracker field must be a bool."
        ],
        "details.feedback": [
            "The feedback field must be a bool."
        ],
        "tags": [
            "The tags field must be an array."
        ],
        "categories": [
            "The categories field must be an array."
        ]
    }
}
```
> Example response (460):

```json
{
    "success": false,
    "code": 460,
    "message": "Wrong request",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-v1-courses-department--department_id--filtered" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-courses-department--department_id--filtered"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-courses-department--department_id--filtered"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-courses-department--department_id--filtered" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-courses-department--department_id--filtered"></code></pre>
</div>
<form id="form-POSTapi-v1-courses-department--department_id--filtered" data-method="POST" data-path="api/v1/courses/department/{department_id}/filtered" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-courses-department--department_id--filtered', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-courses-department--department_id--filtered" onclick="tryItOut('POSTapi-v1-courses-department--department_id--filtered');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-courses-department--department_id--filtered" onclick="cancelTryOut('POSTapi-v1-courses-department--department_id--filtered');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-courses-department--department_id--filtered" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/courses/department/{department_id}/filtered</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-courses-department--department_id--filtered" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-courses-department--department_id--filtered" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="POSTapi-v1-courses-department--department_id--filtered" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-v1-courses-department--department_id--filtered" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tag_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tag_id" data-endpoint="POSTapi-v1-courses-department--department_id--filtered" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>author</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="author" data-endpoint="POSTapi-v1-courses-department--department_id--filtered" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>length</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="length" data-endpoint="POSTapi-v1-courses-department--department_id--filtered" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified course.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/courses/non?id=12" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courses/non"
);

let params = {
    "id": "12",
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
 "message": "Got Specific Course",
 "data": {
    "id": 4,
    "name": "Course Theme 1",
    "developer_id": 1,
    "author": "Course Author Name",
    "thumb": "thumb-file-name.jpg",
    "description": "Description text",
    "like": 100,
    "status": "draft",
    "length_unit": "m",
    "length": 20,
    "offline": false,
    "mood_tracker": false,
    "feedback": false,
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
    "tag": [
       [
          "id": 1,
          "name": "tag 1"
       ]
    ],
    "category": [
       [
          "id": 1,
          "name": "category 1"
       ]
    ]
   }
}
```
> Example response (460):

```json
{
    "success": false,
    "code": 460,
    "message": "Wrong request",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-courses--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-courses--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-courses--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-courses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-courses--id-"></code></pre>
</div>
<form id="form-GETapi-v1-courses--id-" data-method="GET" data-path="api/v1/courses/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-courses--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-courses--id-" onclick="tryItOut('GETapi-v1-courses--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-courses--id-" onclick="cancelTryOut('GETapi-v1-courses--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-courses--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/courses/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-courses--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-courses--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-courses--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-courses--id-" data-component="query"  hidden>
<br>
Course ID</p>
</form>


## Store a newly created course

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/courses/ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"details":{"status":"est","name":"harum","department_id":18,"author":"id","thumb":"asperiores","description":"libero","likes":11,"length_unit":"modi","length":2,"offline":false,"mood_tracker":false,"feedback":false},"tags":["nulla"],"categories":["officiis"],"course":{"details":{"name":"sunt","status":"vel","length_unit":"enim","length":"maxime","offline":true,"mood_tracker":false,"feedback":true},"tags":"aut","categories":"neque"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courses/ex"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "details": {
        "status": "est",
        "name": "harum",
        "department_id": 18,
        "author": "id",
        "thumb": "asperiores",
        "description": "libero",
        "likes": 11,
        "length_unit": "modi",
        "length": 2,
        "offline": false,
        "mood_tracker": false,
        "feedback": false
    },
    "tags": [
        "nulla"
    ],
    "categories": [
        "officiis"
    ],
    "course": {
        "details": {
            "name": "sunt",
            "status": "vel",
            "length_unit": "enim",
            "length": "maxime",
            "offline": true,
            "mood_tracker": false,
            "feedback": true
        },
        "tags": "aut",
        "categories": "neque"
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
 "message": "Created New Course",
 "data": [
    "id": 4,
    "name": "Course Theme 1",
    "developer_id": 1,
    "author": "Course Author Name",
    "thumb": "thumb-file-name.jpg",
    "description": "Description text",
    "like": 100,
    "status": "draft",
    "length_unit": "m",
    "length": 20,
    "offline": false,
    "mood_tracker": false,
    "feedback": false,
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
    "tag": [
       [
          "id": 1,
          "name": "tag 1"
       ]
    ],
    "category": [
       [
          "id": 1,
          "name": "category 1"
       ]
    ]
 ]
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "details": [
            "The details field is required."
        ],
        "details.name": [
            "The name field is required."
        ],
        "details.status": [
            "The status field is required."
        ],
        "details.length_unit": [
            "The length_unit field is required."
        ],
        "details.length": [
            "The length field is required."
        ],
        "details.offline": [
            "The offline field is required."
        ],
        "details.mood_tracker": [
            "The mood_tracker field must be a bool."
        ],
        "details.feedback": [
            "The feedback field must be a bool."
        ],
        "tags": [
            "The tags field must be an array."
        ],
        "categories": [
            "The categories field must be an array."
        ]
    }
}
```
> Example response (460):

```json
{
    "success": false,
    "code": 460,
    "message": "Wrong request",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-v1-courses--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-courses--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-courses--department_id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-courses--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-courses--department_id-"></code></pre>
</div>
<form id="form-POSTapi-v1-courses--department_id-" data-method="POST" data-path="api/v1/courses/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-courses--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-courses--department_id-" onclick="tryItOut('POSTapi-v1-courses--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-courses--department_id-" onclick="cancelTryOut('POSTapi-v1-courses--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-courses--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/courses/{department_id}</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-courses--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-courses--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="POSTapi-v1-courses--department_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>details</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>
</summary>
<br>
<p>
<b><code>details.status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="details.status" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>details.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="details.name" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>details.department_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="details.department_id" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>details.author</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="details.author" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>details.thumb</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="details.thumb" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>details.description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="details.description" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>details.likes</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="details.likes" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>details.length_unit</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="details.length_unit" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>details.length</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="details.length" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>details.offline</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="details.offline" value="true" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="details.offline" value="false" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<b><code>details.mood_tracker</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="details.mood_tracker" value="true" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="details.mood_tracker" value="false" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<b><code>details.feedback</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="details.feedback" value="true" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="details.feedback" value="false" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>false</code></label>
<br>
</p>
</details>
</p>
<p>
<b><code>tags</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="tags.0" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<input type="text" name="tags.1" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" hidden>
<br>
</p>
<p>
<b><code>categories</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="categories.0" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<input type="text" name="categories.1" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>course</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The course object</summary>
<br>
<p>
<details>
<summary>
<b><code>course.details</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The course object details</summary>
<br>
<p>
<b><code>course.details.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="course.details.name" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
The course's name</p>
<p>
<b><code>course.details.status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="course.details.status" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
The course's status</p>
<p>
<b><code>course.details.length_unit</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="course.details.length_unit" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
The course's length
            unit</p>
<p>
<b><code>course.details.length</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="course.details.length" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required  hidden>
<br>
The length of the course</p>
<p>
<b><code>course.details.offline</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="course.details.offline" value="true" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="course.details.offline" value="false" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>false</code></label>
<br>
The Offline parameter of the
            course</p>
<p>
<b><code>course.details.mood_tracker</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="course.details.mood_tracker" value="true" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="course.details.mood_tracker" value="false" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>false</code></label>
<br>
The mood_tracker
            parameter of the course</p>
<p>
<b><code>course.details.feedback</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="course.details.feedback" value="true" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-v1-courses--department_id-" hidden><input type="radio" name="course.details.feedback" value="false" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body" required ><code>false</code></label>
<br>
The feedback parameter of
            the course</p>
</details>
</p>

<p>
<details>
<summary>
<b><code>course.tags</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<br>
The tags of the course</summary>
<br>
<p>
<b><code>course.tags.id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="course.tags.id" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body"  hidden>
<br>
The ID of a tag</p>
<p>
<b><code>course.tags.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="course.tags.name" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body"  hidden>
<br>
The name of a tag</p>
</details>
</p>

<p>
<details>
<summary>
<b><code>course.categories</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<br>
The categories of the course</summary>
<br>
<p>
<b><code>course.categories.id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="course.categories.id" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body"  hidden>
<br>
The ID of a tag</p>
<p>
<b><code>course.categories.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="course.categories.name" data-endpoint="POSTapi-v1-courses--department_id-" data-component="body"  hidden>
<br>
The name of a tag</p>
</details>
</p>

</details>
</p>

</form>


## Update the specified course in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/courses/asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"details":{"status":"voluptatem","name":"modi","department_id":10,"author":"est","thumb":"eos","description":"aliquam","likes":8,"length_unit":"laudantium","length":1,"offline":false,"mood_tracker":false,"feedback":false},"tags":["repellendus"],"categories":["suscipit"],"course":{"details":{"name":"laborum","status":"voluptate","length_unit":"perspiciatis","length":"culpa","offline":false,"mood_tracker":true,"feedback":true},"tags":"dolores","categories":"sapiente"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courses/asperiores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "details": {
        "status": "voluptatem",
        "name": "modi",
        "department_id": 10,
        "author": "est",
        "thumb": "eos",
        "description": "aliquam",
        "likes": 8,
        "length_unit": "laudantium",
        "length": 1,
        "offline": false,
        "mood_tracker": false,
        "feedback": false
    },
    "tags": [
        "repellendus"
    ],
    "categories": [
        "suscipit"
    ],
    "course": {
        "details": {
            "name": "laborum",
            "status": "voluptate",
            "length_unit": "perspiciatis",
            "length": "culpa",
            "offline": false,
            "mood_tracker": true,
            "feedback": true
        },
        "tags": "dolores",
        "categories": "sapiente"
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
 "message": "Created New Course",
 "data": [
    "id": 4,
    "name": "Course Theme 1",
    "developer_id": 1,
    "author": "Course Author Name",
    "thumb": "thumb-file-name.jpg",
    "description": "Description text",
    "like": 100,
    "status": "draft",
    "length_unit": "m",
    "length": 20,
    "offline": false,
    "mood_tracker": false,
    "feedback": false,
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
    "tag": [
       [
          "id": 1,
          "name": "tag 1"
       ]
    ],
    "category": [
       [
          "id": 1,
          "name": "category 1"
       ]
    ]
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "details":["The details field is required."],
  "details.name":["The name field is string."],
  "details.status":["The status field is string."],
  "details.length_unit":["The length_unit field is string."],
  "details.length":["The length field is integer."],
  "details.offline":["The offline field is bool."],
  "details.mood_tracker":["The mood_tracker field must be a bool."],
  "details.feedback":["The feedback field must be a bool."],
  "tags":["The tags field must be an array."],
  "categories":["The categories field must be an array."]
 }
}

* @response   460 {
 "success": false,
 "code": 460,
 "message": "Wrong request",
 "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-v1-courses--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-courses--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-courses--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-courses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-courses--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-courses--id-" data-method="PUT" data-path="api/v1/courses/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-courses--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-courses--id-" onclick="tryItOut('PUTapi-v1-courses--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-courses--id-" onclick="cancelTryOut('PUTapi-v1-courses--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-courses--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/courses/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-courses--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-courses--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-courses--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>details</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>
</summary>
<br>
<p>
<b><code>details.status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="details.status" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>details.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="details.name" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>details.department_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="details.department_id" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>details.author</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="details.author" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>details.thumb</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="details.thumb" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>details.description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="details.description" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>details.likes</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="details.likes" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>details.length_unit</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="details.length_unit" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>details.length</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="details.length" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>details.offline</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="details.offline" value="true" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="details.offline" value="false" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>details.mood_tracker</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="details.mood_tracker" value="true" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="details.mood_tracker" value="false" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>details.feedback</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="details.feedback" value="true" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="details.feedback" value="false" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>false</code></label>
<br>
</p>
</details>
</p>
<p>
<b><code>tags</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
<input type="text" name="tags.0" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<input type="text" name="tags.1" data-endpoint="PUTapi-v1-courses--id-" data-component="body" hidden>
<br>
</p>
<p>
<b><code>categories</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
<input type="text" name="categories.0" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<input type="text" name="categories.1" data-endpoint="PUTapi-v1-courses--id-" data-component="body" hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>course</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The course object</summary>
<br>
<p>
<details>
<summary>
<b><code>course.details</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The course object details</summary>
<br>
<p>
<b><code>course.details.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="course.details.name" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
The course's name</p>
<p>
<b><code>course.details.status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="course.details.status" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
The course's status</p>
<p>
<b><code>course.details.length_unit</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="course.details.length_unit" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
The course's length unit</p>
<p>
<b><code>course.details.length</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="course.details.length" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
The length of the course</p>
<p>
<b><code>course.details.offline</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="course.details.offline" value="true" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="course.details.offline" value="false" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>false</code></label>
<br>
The Offline parameter of the course</p>
<p>
<b><code>course.details.mood_tracker</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="course.details.mood_tracker" value="true" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="course.details.mood_tracker" value="false" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>false</code></label>
<br>
The mood_tracker parameter of
            the course</p>
<p>
<b><code>course.details.feedback</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="course.details.feedback" value="true" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-courses--id-" hidden><input type="radio" name="course.details.feedback" value="false" data-endpoint="PUTapi-v1-courses--id-" data-component="body" ><code>false</code></label>
<br>
The feedback parameter of the course</p>
</details>
</p>

<p>
<details>
<summary>
<b><code>course.tags</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<br>
The tags of the course</summary>
<br>
<p>
<b><code>course.tags.id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="course.tags.id" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
The ID of a tag</p>
<p>
<b><code>course.tags.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="course.tags.name" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
The name of a tag</p>
</details>
</p>

<p>
<details>
<summary>
<b><code>course.categories</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<br>
The categories of the course</summary>
<br>
<p>
<b><code>course.categories.id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="course.categories.id" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
The ID of a tag</p>
<p>
<b><code>course.categories.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="course.categories.name" data-endpoint="PUTapi-v1-courses--id-" data-component="body"  hidden>
<br>
The name of a tag</p>
</details>
</p>

</details>
</p>

</form>


## Remove the specified course.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/courses/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courses/molestiae"
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
 "message": "Deleted The Course.",
 "data": null
}

* @response   460 {
 "success": false,
 "code": 460,
 "message": "Wrong request",
 "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-v1-courses--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-courses--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-courses--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-courses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-courses--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-courses--id-" data-method="DELETE" data-path="api/v1/courses/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-courses--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-courses--id-" onclick="tryItOut('DELETEapi-v1-courses--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-courses--id-" onclick="cancelTryOut('DELETEapi-v1-courses--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-courses--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/courses/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-courses--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-courses--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-courses--id-" data-component="url" required  hidden>
<br>
</p>
</form>



