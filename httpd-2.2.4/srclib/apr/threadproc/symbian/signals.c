/* Copyright 2007 Nokia Corporation
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

#include "apr.h"
#include "apr_arch_threadproc.h"
#include "apr_errno.h"
#include "apr_signal.h"


APR_DECLARE(apr_status_t) apr_proc_kill(apr_proc_t *proc, int signum)
{
    /*
     * Symbian does not have signals.
     */
    return APR_ENOTIMPL;
}
